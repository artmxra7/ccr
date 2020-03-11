<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\User;
use Auth;
use Hash;
use Validator;
use Image;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      //
      protected $LaporanRepo;
      public function __construct( LaporanRepository $LaporanRepo)
      {
          $this->LaporanRepo = $LaporanRepo;
        //   $this->middleware('auth:admin');
      }

    public function index()
    {

    }

    public function create()
    {
    }
    public function buatLaporan(Request $request)
    {

        $messages = [
            'laporan.required' => 'Laporan Harus Diisi',
            'laporan_sub_id.required' => 'Anda Belum Memilih Jenis Laporan'
        ];

        $validator = Validator::make(request()->all(), [
            'laporan_sub_id'      => 'required',
            'laporan' => 'required'


        ], $messages);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        if (Auth::guest()) {
            Session::flush();


            $req = $request->all();
            Session::setId('ERWIN GG', $req);
            Session::save();
            $request->session()->push('request', $req);
            // dd($request);
            return Redirect::route('guest-daftar');
        }else{
            $input = $request->all();
            $input['pelapor'] = Auth::user()->name;
            $input['pelapor_id'] = Auth::user()->id;

            if ( $input['laporan_sub_id'][0] == 'universitas') {
                $input['laporan_sub_id'] = 1;
            } else {
                $input['laporan_sub_id'] = 2;
            }



            $news = $this->LaporanRepo->createLaporan($input);
            // dd(Auth::user());


            return redirect()->route('profile.users')
            ->with('success','Laporan created successfully');
        }

    }

    public function postLaporan(Request $request)
    {


        $messages = [
            'laporan.required' => 'Laporan Harus Diisi',
            'laporan_sub_id.required' => 'Anda Belum Memilih Jenis Laporan'
        ];

        $validator = Validator::make(request()->all(), [
            'laporan_sub_id'      => 'required',
            'laporan' => 'required'


        ], $messages);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }
        $input = $request->all();
        $image = $request->file('ktp');

        if ($image == ''){
           // dd($ktp);
            return redirect()
                ->back()
                ->with('error', 'Harap Upload KTP anda untuk Verifikasi kami');
        }






            if ($image == '') {

                $input['pelapor'] = Auth::user()->name;
                $input['pelapor_id'] = Auth::user()->id;

                if ( $input['laporan_sub_id'][0] == 'universitas') {
                    $input['laporan_sub_id'] = 1;
                } else {
                    $input['laporan_sub_id'] = 2;
                }



                $news = $this->LaporanRepo->createLaporan($input);
                // dd(Auth::user());

                return redirect()->route('profile.users')
            ->with('success','Laporan Anda Berhasil di Buat');
            } else {

                $nameImage = $request->file('ktp')->getClientOriginalName();
                $input['ktp'] =   $nameImage;

                $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
                $thumbPath = public_path() . '/thumbnail_images/' . $nameImage;
                $thumbImage = Image::make($thumbImage)->save($thumbPath);
                $oriPath = public_path() . '/normal_images/' . $nameImage;
                $oriImage = Image::make($image)->save($oriPath);

                $input['pelapor'] = Auth::user()->name;
                $input['pelapor_id'] = Auth::user()->id;

                if ( $input['laporan_sub_id'][0] == 'universitas') {
                    $input['laporan_sub_id'] = 1;
                } else {
                    $input['laporan_sub_id'] = 2;
                }

                $news = $this->LaporanRepo->createLaporan($input);


                return redirect()->route('profile.users')
                ->with('success','Laporan Anda Berhasil di Buat');

            }







    }
    public function register()
    {

        $products = session('request');

        if ($products == null) {
            // echo 'bangsat';
        } else {
            // dd($products[0]['laporan']);

            return view('users.laporan.index', compact('products'));
        }
    }
    public function postRegister(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|same:confirm-password',

        ]);
        $input = $request->all();
        $inputLaporan = $request->all();
        $inputLaporan['pelapor'] = $input['name'];
        $products = session('request');

        if ( $products[0]['laporan_sub_id'][0] == 'universitas') {
            $inputLaporan['laporan_sub_id'] = 1;
            $inputLaporan['laporan'] = $products[0]['laporan'];
            $input['user_code'] = generateFiledCode('USER');
            $input['password'] = Hash::make($input['password']);
            //  dd($inputLaporan);
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => bcrypt($input['password']),
            ]);

            $id= $user->id;
            $inputLaporan['pelapor_id'] = $id;
            $news = $this->LaporanRepo->createLaporan($inputLaporan);
            Auth::login($user);
            return redirect()->route('profile.users')
            ->with('success','Laporan created successfully');
        } else {
            $inputLaporan['laporan_sub_id'] = 2;
            $inputLaporan['laporan'] = $products[0]['laporan'];
            $input['user_code'] = generateFiledCode('USER');
            $input['password'] = Hash::make($input['password']);
            //  dd($inputLaporan);
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => bcrypt($input['password']),
            ]);

            $id= $user->id;
            $inputLaporan['pelapor_id'] = $id;
            $news = $this->LaporanRepo->createLaporan($inputLaporan);
            Auth::login($user);
            return redirect()->route('profile.users')
            ->with('success','Laporan created successfully');
        }


        // dd($input);


    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

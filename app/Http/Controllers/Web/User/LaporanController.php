<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
        if (Auth::guest()) {
            Session::flush();


            $req = $request->all();
            Session::setId('ERWIN GG', $req);
            Session::save();
            $request->session()->push('request', $req);
            dd($request);
            return Redirect::route('guest-daftar');
        }else{
            dd('AKSDQOKSADQIASKDQI');
        }

    }

    public function postLaporan(Request $request)
    {


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
    public function register()
    {

        $products = session('request');

        if ($products == null) {
            echo 'bangsat';
        } else {
            // dd($products[0]['laporan']);

            return view('users.laporan.index', compact('products'));
        }
    }
    public function postRegister(Request $request)
    {

        $products = session('request');

        if ($products == null) {
            echo 'bangsat';
        } else {
            dd($request);
        }
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

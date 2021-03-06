<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use App\User;
use Illuminate\Http\Request;

use Auth;
use Image;

use Hash;
use Validator;
class ProfileController extends Controller
{

    protected $LaporanRepo;
    public function __construct( LaporanRepository $LaporanRepo)
    {
        $this->LaporanRepo = $LaporanRepo;
        $this->middleware('auth');
    }
    public function index()
    {
        $userKtp = Auth::user()->ktp;
        $id = Auth::user()->id;
        $laporan = $this->LaporanRepo->getLaporanById($id);
        //  dd( $user);
        return view('users.profile.dashboard',  compact('laporan','userKtp'));
    }

    public function belum()
    {
        $id = Auth::user()->id;
        $laporan = $this->LaporanRepo->getLaporanByIdBelum($id);
        // dd( $laporan);
        return view('users.profile.dashboard_belum',  compact('laporan'));
    }
    public function selesai()
    {
        $id = Auth::user()->id;
        $laporan = $this->LaporanRepo->getLaporanByIdSelesai($id);
        // dd( $laporan);
        return view('users.profile.dashboard_selesai',  compact('laporan'));
    }

    public function editProfile()
    {
        $result = Auth::user();

        // dd($result);
         return view('users.profile.edit_profile', compact('result'));
    }

    public function editPassword()
    {
        $result = Auth::user();

        // dd($result);
         return view('users.profile.password_profile', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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


    public function updateProfile(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $input = $request->all();
        $image = $request->file('avatar');
        $user = User::find($id);

        if ($image == '') {
            $user->update($input);

            return redirect()->route('profile.users')
            ->with('success', 'Profile Berhasil Diperbaharui');
        } else {
            $nameImage = $request->file('avatar')->getClientOriginalName();
            $input['avatar'] =   $nameImage;
            $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
            $thumbPath = public_path() . '/thumbnail_images/' . $nameImage;
            $thumbImage = Image::make($thumbImage)->save($thumbPath);
            $oriPath = public_path() . '/normal_images/' . $nameImage;
            $oriImage = Image::make($image)->save($oriPath);
            $user->update($input);
        }

        return redirect()->route('profile.users')
        ->with('success', 'Profile Berhasil Diperbaharui');

        // dd($user);
    }
    public function updatePassword(Request $request, $id)
    {

        // custom validator
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });

        $messages = [
            'password' => 'Invalid current password.',
        ];

        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password' => 'required|same:confirm-password'


        ], $messages);

        // if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }





        // $this->validate($request, [
        //     'current_password'  => 'required|password',
        //     'password' => 'required|same:confirm-password',
        // ],$messages);





        $input = $request->all();
        // dd($input);
        $input['password'] = Hash::make($input['password']);
        $user = User::find($id);


            $user->update($input);

            return redirect()->route('profile.users')
            ->with('success', 'Password Berhasil Diperbaharui');


        // dd($user);
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

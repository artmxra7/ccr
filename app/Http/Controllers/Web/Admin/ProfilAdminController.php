<?php

namespace App\Http\Controllers\Web\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Image;


class ProfilAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $result = Auth::user();
        // dd($id->id);
        return view('admin.profile.index', compact('result'));
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
    public function edit(Admin $id)
    {
        $id = Ai::user();
        return view('users.edit', compact('user'));
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
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $input = $request->all();
        $image = $request->file('avatar');
        $user = Admin::find($id);

        if ($image == '') {


            $user->update($input);
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







        return redirect()->route('admin.my-profile.index')
            ->with('success', 'Profile updated successfully');
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

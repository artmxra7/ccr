<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

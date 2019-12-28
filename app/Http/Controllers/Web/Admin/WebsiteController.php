<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\WebsiteRepository;
use App\Website;
use Illuminate\Http\Request;
use Auth;

class WebsiteController extends Controller
{
    protected $adminWebRepo;
    public function __construct(WebsiteRepository $adminWebRepo)
    {
        $this->middleware('auth:admin');
        $this->adminWebRepo = $adminWebRepo;
    }
    public function index()
    {
        $result = $this->adminWebRepo->getData();
        // dd($result);
        $data = $result->title_website;
        // dd($data);
        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view('admin.website.index' , compact('breadcrumb', 'result'));
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
        // dd($id);
        $result = Website::find($id)->first();
        return view('admin.website.edit',compact('result'));
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


        $input = $request->all();
        // dd($input);
        $user = Website::find($id);
        $user->update($input);

        //  dd($user);



        // dd($webconf);

        return redirect()->route('admin.web-settings.index')
                        ->with('success','Website Settings updated successfully');
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

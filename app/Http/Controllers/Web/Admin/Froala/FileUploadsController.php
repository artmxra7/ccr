<?php

namespace App\Http\Controllers\Web\Admin\Froala;

use App\Http\Controllers\Controller;
use App\ImageUploads;
use Illuminate\Http\Request;

class FileUploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
		$images = ImageUploads::get();
		$list = array();
		foreach($images as $image){
			$img = new \StdClass;
			$img->url  = $image->path;
			$img->thumb = $image->path;
			$img->id = $image->id;
			$list[] = $img;
		}
		return stripslashes(response()->json($list)->content());
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
        $input 				= $request->all();
    	$location 			= $input['location'];
		$fileData 			= $request->file('image'); //this gets the image data for 1st argument
        // $filename 			= $fileData->getClientOriginalName();
        $filename           = $_FILES['image']['name'];
        // dd($filename);
        // $completePath 		= url('/' . $location . '/' . $filename);
        $destinationPath 	= 'images/';
        $request->file('image')->move($destinationPath, $filename);
		$completePath = url('/' . $destinationPath . $filename);
		$fileupload = new ImageUploads;
		$fileupload->title = $filename;
		$fileupload->path = $completePath;
		$fileupload->save();
		// if($fileupload->save()){
			return stripslashes(response()->json(['link' => $completePath])->content());
		// }
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
        $input = $request->all();
    	$url = parse_url($input['src']);
    	$splitPath = explode("/", $url["path"]);
    	$splitPathLength = count($splitPath);
    	ImageUploads::where('path', 'LIKE', '%' . $splitPath[$splitPathLength-1] . '%')->delete();
    }
}

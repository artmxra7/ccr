<?php

namespace App\Http\Controllers\Web\Admin;

use App\Artikel;
use App\ArtikelCategory;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ArtikelRepository;
use Illuminate\Http\Request;
use DataTables;

use Image;

use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    protected $artikelRepo;

    public function __construct(ArtikelRepository $artikelRepo)
    {
        $this->artikelRepo = $artikelRepo;
        $this->middleware('auth:admin');
    }


    public function json()
    {

        $result = $this->artikelRepo->getArtikel();

        //  dd($result);

        $data = collect($result);
        return Datatables::of($data)
            ->addColumn('aksi', function ($data) {


            $button = '<a href="buat-artikel/'.$data->noartikels.'/edit" id="'.$data->noartikels.'"  class="btn btn-primary btn-sm">Edit</a>
            </div>';

            $button .= '&nbsp;&nbsp;';
                return $button;
            })
            ->addColumn('none', function ($data) {
                return '-';
            })
            ->rawColumns(['aksi', 'confirmed'])
            ->make(true);
    }

    public function index()
    {
        //

        return view('admin.artikel.index');
    }

    public function create()
    {
        //
        // dd(Auth::user());
        $artikel_categories = ArtikelCategory::pluck('artikels_category_name', 'id');
        $breadcrumb['artikel'] = 'Artikel';
        $breadcrumb['!end!'] = 'Buat Artikel';

        return view('admin.artikel.create', compact('breadcrumb', 'artikel_categories'));
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $artikel_categories = ArtikelCategory::pluck('artikels_category_name', 'id');
        // dd( $user,$userRole);


        return view('admin.artikel.edit',compact('artikel','artikel_categories'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'artikels_title' => 'required',
            'artikels_category_id' => 'required',
            'artikels_content' => 'required',
            'artikels_images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);


        $input = $request->all();
        $images = $request->file('artikels_images');
        // dd($input);
        $input['artikels_slug'] = str_slug($input['artikels_title']);

        if ($images == NULL) {
            //  dd($input);
            $input['artikels_images'] = '';
            $input['artikels_publisher'] = Auth::user()->name;
            // dd($input);
            $news = $this->artikelRepo->createArtikel($input);

            return redirect()->route('admin.buat-artikel.index')
                ->with('success', 'News created successfully');
        } else {
            if ($request->hasFile('artikels_images')) {
                $photo = $request->file('artikels_images')->getClientOriginalName();
                // dd($photo);
            }

            $input['artikels_images'] = $photo;
            // dd($input);


            $thumbImage = Image::make($images->getRealPath())->resize(500, 500);
            $thumbPath = public_path() . '/thumbnail_images/news/' . $photo;
            // dd($images);
            $thumbImage = Image::make($thumbImage)->save($thumbPath);
            $oriPath = public_path() . '/normal_images/news/' . $photo;
            $oriImage = Image::make($images)->save($oriPath);

            $input['artikels_publisher'] = Auth::user()->name;
            $news = $this->artikelRepo->createArtikel($input);
            return redirect()->route('admin.buat-artikel.index');
        }

    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'artikels_title' => 'required',
            'artikels_category_id' => 'required',
            'artikels_content' => 'required',
            'artikels_images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);


        $input = $request->all();
        $images = $request->file('artikels_images');
        // dd($input);
        $input['artikels_slug'] = str_slug($input['artikels_title']);

        if ($images == NULL) {
            //  dd($input);
            // $input['artikels_images'] = '';
            $input['artikels_publisher'] = Auth::user()->name;
            $news = $this->artikelRepo->updateArtikel($input, $id);
            // dd($input);
            return redirect()->route('admin.buat-artikel.index')
                ->with('success', 'News created successfully');
        } else {
            if ($request->hasFile('artikels_images')) {
                $photo = $request->file('artikels_images')->getClientOriginalName();
                // dd($photo);
            }

            $input['artikels_images'] = $photo;


            $thumbImage = Image::make($images->getRealPath())->resize(100, 100);
            $thumbPath = public_path() . '/thumbnail_images/news/' . $photo;
            // dd($images);
            $thumbImage = Image::make($thumbImage)->save($thumbPath);
            $oriPath = public_path() . '/normal_images/news/' . $photo;
            $oriImage = Image::make($images)->save($oriPath);

            $input['artikels_publisher'] = Auth::user()->name;

            // dd($input);
            $news = $this->artikelRepo->updateArtikel($input, $id);
            return redirect()->route('admin.buat-artikel.index');
        }
    }
}

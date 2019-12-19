<?php

namespace App\Http\Controllers\Web\Admin;

use App\ArtikelCategory;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ArtikelRepository;
use Illuminate\Http\Request;
use DataTables;

class ArtikelController extends Controller
{
    protected $artikelRepo;

    public function __construct(ArtikelRepository $artikelRepo)
    {
        $this->artikelRepo = $artikelRepo;
    }


    public function json(){

        $result = $this->artikelRepo->getArtikel();

        // dd($result);

        $data = collect($result);
        return Datatables::of($data)
        ->addColumn('aksi', function ($data) {

            // $button = '<a href="/order-job/'.$data->news_code.'" id="'.$data->news_code.'" class="btn btn-primary btn-sm">Detail</a>
            // </div>';
            // $button = '&nbsp;&nbsp;';
            // $button .= '<a class="btn btn-primary btn-sm">Edit</a>
            // </div>';
            // $button .= '&nbsp;&nbsp;';
            // $button .= '<a  class="btn btn-danger btn-sm">Hapus</a>
            // </div>';
            // return $button;
          })

          ->rawColumns(['aksi'])
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

        $artikel_categories = ArtikelCategory::pluck('artikels_category_name', 'id');
        $breadcrumb['artikel'] = 'Artikel';
        $breadcrumb['!end!'] = 'Buat Artikel';

        return view('admin.artikel.create' , compact('breadcrumb', 'artikel_categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        dd($input);
        $input['slug'] = str_slug($input['title']);
        $input['photo'] =  uploadImg($input['photo'], $input['slug']);
        $input['artikels_publisher'] = Auth::user()->users_name;

        $news = $this->artikelRepo->createArtikel($input);

        return redirect()->route('admin.artikel.index')
        ->with('success','News created successfully');
    }


}

<?php

namespace App\Http\Controllers\Web\Admin;

use App\ArtikelCategory;
use App\Http\Repositories\ArtikelCategoryRepository;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;

class ArtikelCategoryController extends Controller
{
    //
    protected $artikelCatRepo;
    public function __construct( ArtikelCategoryRepository $artikelCatRepo)
    {
        $this->artikelCatRepo = $artikelCatRepo;
    }

    public function json(){

        $result = $this->artikelCatRepo->getNews();

        // dd($result);

        $data = collect($result);
        return Datatables::of($data)->addColumn('aksi', function ($data) {


            $button = '<a href="/news-category/'.$data->artikels_category_code.'/edit" id="'.$data->artikels_category_code.'"  class="btn btn-primary btn-sm">Edit</a>
            </div>';
            $button .= '<a href="/news-category/hapus/'.$data->artikels_category_code.'" id="'.$data->artikels_category_code.'"  class="btn btn-danger btn-sm">Hapus</a>
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
        return view('admin.artikel_category.index');
    }

    public function create()
    {

        $breadcrumb['news-category'] = 'News Category';
        $breadcrumb['!end!'] = 'Create News Category';

        return view('admin.artikel_category.create', compact('breadcrumb', ));
    }

    public function store(Request $request)
    {
        $req = $request->all();

        $newscat = new ArtikelCategory();
        $newscat->artikels_category_code = generateFiledCode('ARTIKEL-CATEGORIES');
        $newscat->artikels_category_name = $request->input('name');
        $newscat->created_at = Carbon::now();

        $newscat->save();

        return redirect()->route('admin.artikel-kategori.index')
        ->with('success','News Category created successfully');
    }
}

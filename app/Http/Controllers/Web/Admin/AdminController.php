<?php

namespace App\Http\Controllers\Web\Admin;

use App\Admin;

use App\Http\Repositories\AdminDataRepository;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;

use Spatie\Permission\Models\Role;
use DB;
use Hash;

class AdminController extends Controller
{
    protected $adminDataRepo;
    public function __construct(AdminDataRepository $adminDataRepo)
    {
        $this->middleware('auth:admin');
        $this->adminDataRepo = $adminDataRepo;
    }

    public function json(){

        $result = $this->adminDataRepo->getData();

        // dd($result);

        $data = collect($result);
        return Datatables::of($data)->addColumn('aksi', function ($data) {


            $button = '<a href="/news-category/'.$data->id.'/edit" id="'.$data->id.'"  class="btn btn-primary btn-sm">Edit</a>
            </div>';
            $button .= '<a href="/news-category/hapus/'.$data->id.'" id="'.$data->id.'"  class="btn btn-danger btn-sm">Hapus</a>
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
        $data = User::orderBy('id','DESC')
            ->where('id', '!=', 2)
            ->where('is_dashboard', '!=', 1)->paginate(5);
        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view('admin.data_admin.index' , compact('breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.data_admin.create' ,compact('roles'));
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

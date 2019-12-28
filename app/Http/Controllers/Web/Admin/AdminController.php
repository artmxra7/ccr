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
use Illuminate\Support\Facades\Auth;

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


            $button = '<a href="data-admin/'.$data->id.'/edit" id="'.$data->id.'"  class="btn btn-primary btn-sm">Edit</a>
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
        // dd(Auth::user());
        $data = Admin::orderBy('id','DESC')
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $roles = \Spatie\Permission\Models\Role::all();
        $input = $request->all();
        $input['user_code'] = generateFiledCode('USER');
        $input['is_dashboard'] = 0;
        $input['password'] = Hash::make($input['password']);
        // dd($roles);
        $user = Admin::create($input);

        $user->assignRole('Superadmin');
        // dd($user);


        return redirect()->route('admin.data-admin.index')
                        ->with('success','User created successfully');
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
        $user = Admin::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        // dd( $user,$userRole);


        return view('admin.data_admin.edit',compact('user','roles','userRole'));
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
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }
        // dd($input);


        $user = Admin::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('admin.data-admin.index')
                        ->with('success','Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        Admin::find($id)->delete();
        return redirect()->route('admin.data_admin.index')
                        ->with('success','User deleted successfully');
    }
    public function hapus($id)
    {
        dd($id);
        Admin::find($id)->delete();
        return redirect()->route('admin.data_admin.index')
                        ->with('success','User deleted successfully');
    }
}

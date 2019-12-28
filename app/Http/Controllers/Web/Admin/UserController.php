<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;


use Carbon\Carbon;
use DataTables;

use Spatie\Permission\Models\Role;
use DB;
use Hash;


class UserController extends Controller
{

    protected $UserRepo;
    public function __construct(UserRepository $UserRepo)
    {
        $this->middleware('auth:admin');
        $this->UserRepo = $UserRepo;
    }

    public function json(){

        $result = $this->UserRepo->getData();

        // dd($result);

        $data = collect($result);
        return Datatables::of($data)->addColumn('aksi', function ($data) {


            $button = '<a href="data-users/'.$data->id.'/edit" id="'.$data->id.'"  class="btn btn-primary btn-sm">Edit</a>
            </div>';
            $button .= '<a href="data-users/'.$data->id.'" id="'.$data->id.'"  class="btn btn-danger btn-sm">Show</a>
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
        $breadcrumb['users'] = 'Users';
        $breadcrumb['!end!'] = 'Data Users';
        return view('admin.data_users.index',  compact('breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_users.create');
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

        ]);


        // $roles = \Spatie\Permission\Models\Role::all();
        $input = $request->all();
        $input['user_code'] = generateFiledCode('USER');
        // $input['is_dashboard'] = 0;
        $input['password'] = Hash::make($input['password']);
        //  dd($input);
        $user = User::create($input);

        // $user->assignRole('Superadmin');
        // dd($user);


        return redirect()->route('admin.data-users.index')
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
        $user = User::find($id);

        // dd($user->name);



        return view('admin.data_users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        // dd($input);

        $user = User::find($id);
        // $roles = Role::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
        // dd( $user,$userRole);


        return view('admin.data_users.edit',compact('user'));
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
        ]);




        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        // dd($input);
        return redirect()->route('admin.data-users.index')
        ->with('success','User updated successfully');
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

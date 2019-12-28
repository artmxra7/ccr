<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DashboardController extends Controller
{
     //
     protected $LaporanRepo;
    public function __construct(LaporanRepository $LaporanRepo)
    {
        $this->LaporanRepo = $LaporanRepo;
        $this->middleware('auth:admin');
    }


    public function index()
    {

        $users = DB::table('users')->count();
        $laporan = DB::table('laporan')->count();
        $result = $this->LaporanRepo->getLaporanDashboard();

        //  dd($result->created_at);

        return view('admin.dashboard', compact('users', 'laporan', 'result'));
    }
}

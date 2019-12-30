<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{



    public function index()
    {

        $laporan = $this->LaporanRepo->getLaporan();
        dd($laporan);

        return view('users.profile.dashboard');
    }
}

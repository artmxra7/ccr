<?php

namespace App\Http\Repositories;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class  LaporanRepository
{

    function __construct()
    {

    }

    public function getLaporan ()
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->orderBy('created_at', 'DESC')
        ->get();



        return $data;
    }


    public function getLaporanById ($id)
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.tanggapan',
        'laporan.penanggap_laporan',
        'laporan.laporan_code',
        'laporan.created_at',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->orderBy('created_at', 'DESC')
        ->where('pelapor_id', $id)
        ->get();



        return $data;
    }
    public function getLaporanByIdBelum ($id)
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.tanggapan',
        'laporan.penanggap_laporan',
        'laporan.laporan_code',
        'laporan.created_at',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->orderBy('created_at', 'DESC')
        ->where('pelapor_id', $id)
        ->where('laporan_status', 0)
        ->get();



        return $data;
    }
    public function getLaporanByIdSelesai ($id)
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.tanggapan',
        'laporan.penanggap_laporan',
        'laporan.laporan_code',
        'laporan.created_at',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->orderBy('created_at', 'DESC')
        ->where('pelapor_id', $id)
        ->where('laporan_status', 1)
        ->get();



        return $data;
    }


    public function getLaporanKampus ()
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_status'), '=', DB::raw('BINARY lapsub.id'))
        ->where('laporan_sub_id', 1)
        ->orderBy('created_at', 'DESC')
        ->get();



        return $data;
    }




    public function getLaporanBumn ()
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_status'), '=', DB::raw('BINARY lapsub.id'))
        ->where('laporan_sub_id', 2)
        ->orderBy('created_at', 'DESC')
        ->get();



        return $data;
    }


    public function createLaporan ($input)
    {


        $create_job = DB::table('laporan')
            ->insert(
                [
                    'laporan_code' => generateFiledCode('LAPORAN'),
                    'laporan' => $input['laporan'],
                    'laporan_sub_id' => $input['laporan_sub_id'],
                    'pelapor_id' => $input['pelapor_id'],
                    'pelapor' => $input['pelapor'],
                    'laporan_status' => 0,
                    'created_at' => Carbon::now(),
                ]
            );
        return $create_job;
    }



    public function getLaporanDashboard ()
    {
        $data = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.pelapor_id',
        'laporan.laporan_sub_id',
        'laporan.created_at',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama',
         'admin.id',
         'admin.avatar')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->leftJoin('admins as admin', DB::raw('BINARY laporan.pelapor_id'), '=', DB::raw('BINARY admin.id'))
        ->orderBy('created_at', 'DESC')
        ->limit(5)
        ->get();



        return $data;
    }


    public function cekLaporan($request)
    {
        $result = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.pelapor_id',
        'laporan.created_at',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->where('laporan_code', $request)
        ->first();
        return $result;
    }


    public function lihatLaporan($request)
    {
        $result = DB::table('laporan')
        ->select('laporan.laporan_code',
        'laporan.laporan',
        'laporan.pelapor',
        'laporan.pelapor_id',
        'laporan.created_at',
        'laporan.tanggapan',
        'laporan.laporan_sub_id',
        'laporan.laporan_status',
        'laporan.id as nolaporan',
         'lapsub.id',
         'lapsub.nama as nn',
         'admin.id',
        'admin.name')
        ->leftJoin('laporan_sub as lapsub', DB::raw('BINARY laporan.laporan_sub_id'), '=', DB::raw('BINARY lapsub.id'))
        ->leftJoin('admins as admin', DB::raw('BINARY laporan.pelapor_id'), '=', DB::raw('BINARY admin.id'))
        ->where('laporan_code', $request)
        ->first();

        // dd($result);
        return $result;
    }

    public function tanggapLaporan($request)
    {
        $result = DB::table('laporan')
        ->where('laporan_code', $request['laporan_code'])
        ->update($request);
        return $result;
    }


}

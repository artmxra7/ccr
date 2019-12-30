<?php

namespace App\Http\Controllers\Web\Admin;

use App\Artikel;
use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use App\Laporan;
use App\LaporanSub;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;


use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{

     //
     protected $LaporanRepo;
     public function __construct( LaporanRepository $LaporanRepo)
     {
         $this->LaporanRepo = $LaporanRepo;
         $this->middleware('auth:admin');
     }



    public function json(){

        $result = $this->LaporanRepo->getLaporan();

        // dd($result);

        $data = collect($result);
        return Datatables::of($data)->addColumn('aksi', function ($data) {

            // dd($data);

            if ($data->laporan_status == 0) {
                $button = '<a href="laporan/'.$data->laporan_code.'/edit" id="'.$data->laporan_code.'"  class="btn btn-primary btn-sm">Tanggapi</a>
                </div>';
                $button .= '&nbsp;&nbsp;';
                // dd($button);
                return $button;
            }

             $button = '<a href="laporan/lihat-tanggapan/'.$data->laporan_code.'" id="'.$data->laporan_code.'"  class="btn btn-success btn-sm">Lihat</a>
        </div>';
        $button .= '&nbsp;&nbsp;';
        // dd($button);


            return  $button;
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
          return view('admin.laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        // dd(Auth::user());
        $artikel_categories = LaporanSub::pluck('nama', 'id');
        $breadcrumb['artikel'] = 'Artikel';
        $breadcrumb['!end!'] = 'Buat Artikel';

        return view('admin.laporan.create' , compact('breadcrumb', 'artikel_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();








        $input['pelapor'] = Auth::user()->name;
        $input['pelapor_id'] = Auth::user()->id;

        //  dd($input);

        $news = $this->LaporanRepo->createLaporan($input);
        // dd(Auth::user());


        return redirect()->route('admin.laporan.index')
        ->with('success','Laporan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
    }


    public function lihatTanggapan($id)
    {
        $laporan = $this->LaporanRepo->lihatLaporan($id);
        // dd($laporan);

        $artikel_categories = LaporanSub::pluck('nama', 'id');
        return view ('admin.laporan.lihat' , compact( 'laporan','artikel_categories'));

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
        $laporan = $this->LaporanRepo->cekLaporan($id);
        // dd($result);
        $artikel_categories = LaporanSub::pluck('nama', 'id');
        return view ('admin.laporan.edit' , compact( 'laporan','artikel_categories'));
    }


    public function tanggapiLaporan(Request $request)
    {

        $input = $request->all();
        $input['penanggap_laporan'] = Auth::user()->name;
        $input['penanggap_laporan_id'] = Auth::user()->id;
        $input['laporan_status'] = 1;

        // dd($input['laporan_code']);

        $laporan = $this->LaporanRepo->tanggapLaporan($input);
        return redirect()->route('admin.laporan.index')
        ->with('success','Laporan telah Ditanggapi');
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

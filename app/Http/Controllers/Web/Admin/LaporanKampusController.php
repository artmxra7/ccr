<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LaporanRepository;
use Illuminate\Http\Request;

use DataTables;

class LaporanKampusController extends Controller
{
   //
   protected $LaporanRepo;
   public function __construct( LaporanRepository $LaporanRepo)
   {
       $this->LaporanRepo = $LaporanRepo;
       $this->middleware('auth:admin');
   }

   public function json(){

    $result = $this->LaporanRepo->getLaporanKampus();

    // dd($result);

    $data = collect($result);
    return DataTables::of($data)->addColumn('aksi', function ($data) {

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
        return view('admin.laporan_kampus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

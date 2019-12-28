<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ArtikelRepository;
use App\Http\Repositories\WebsiteRepository;
use Illuminate\Http\Request;
use Alert;

class ArtikelController extends Controller
{

    protected $adminWebRepo, $artikelRepository;
    public function __construct(WebsiteRepository $adminWebRepo, ArtikelRepository $artikelRepository)
    {

        $this->adminWebRepo = $adminWebRepo;
        $this->artikelRepository = $artikelRepository;
    }


    public function index()
    {
        //
        $alert = Alert::message('Robots are working!');


        $artikel = $this->artikelRepository->getArtikelList();
        return view('artikel.index', compact('artikel', 'alert'));
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

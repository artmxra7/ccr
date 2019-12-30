<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ArtikelRepository;
use Illuminate\Http\Request;
use App\Http\Repositories\WebsiteRepository;
use App\Website;
use Auth;

class DefaultWebController extends Controller
{

    protected $adminWebRepo, $artikelRepository;
    public function __construct(WebsiteRepository $adminWebRepo, ArtikelRepository $artikelRepository)
    {

        $this->adminWebRepo = $adminWebRepo;
        $this->artikelRepository = $artikelRepository;
    }
    public function dashboard()
    {

        // dd(Auth::guest());
        $result = $this->adminWebRepo->getData();
        $artikel = $this->artikelRepository->getArtikelHighlight();
        // dd($artikel);
        $data = $result->title_website;
        // dd($data);

        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view('welcome' , compact('breadcrumb', 'result', 'artikel'));
    }
    public function artikel()
    {
        $result = $this->adminWebRepo->getData();

        //  dd($result);
        $data = $result->title_website;
        // dd($data);

        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view('artikel' , compact('breadcrumb', 'result'));
    }
    public function contact()
    {
        $result = $this->adminWebRepo->getData();
        // dd($result);
        $data = $result->title_website;
        // dd($data);

        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view('contact' , compact('breadcrumb', 'result'));
    }

    public function tentangKami()
    {
        $result = $this->adminWebRepo->getData();
        $artikel = $this->artikelRepository->getArtikelHighlight();
        // dd($artikel);
        $data = $result->title_website;
        // dd($data);

        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view ('about', compact('breadcrumb', 'result', 'artikel'));
    }

    public function kontakKami()
    {
        $result = $this->adminWebRepo->getData();
        $artikel = $this->artikelRepository->getArtikelHighlight();
        // dd($artikel);
        $data = $result->title_website;
        // dd($data);

        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view ('contact', compact('breadcrumb', 'result', 'artikel'));
    }
    public function pengaduan()
    {
        $result = $this->adminWebRepo->getData();
        $artikel = $this->artikelRepository->getArtikelHighlight();
        // dd($artikel);
        $data = $result->title_website;
        // dd($data);

        $breadcrumb['Admin'] = 'Admin';
        $breadcrumb['!end!'] = 'Data Admin';
        return view ('contact', compact('breadcrumb', 'result', 'artikel'));
    }
}

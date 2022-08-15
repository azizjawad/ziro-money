<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home_page(){
        return view('site.home');
    }

    public function about_us_page(){
        return view('site.about_us');
    }

    public function services_page(){
        return view('site.services');
    }

    public function service_detail_page(){
        return view('site.service_detail');
    }

    public function contact_page(){
        return view('site.contact');
    }
}

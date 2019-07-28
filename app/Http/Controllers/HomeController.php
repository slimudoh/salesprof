<?php

namespace salesprof\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('content.home');
    }

    public function about()
    {
        return view('content.about');
    }

    public function services()
    {
        return view('content.services');
    }

    public function training()
    {
        return view('content.training');
    }

    public function contact()
    {
        return view('content.contact');
    }
}

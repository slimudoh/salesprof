<?php

namespace salesprof\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function training()
    {
        return view('training');
    }

    public function contact()
    {
        return view('contact');
    }
}

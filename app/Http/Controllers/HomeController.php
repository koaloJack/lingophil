<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mainpage.home');
    }

    public function lexikon()
    {
        return view('lexikon.landingpage');
    }

    public function alt()
    {
        return view('lexikon.alt');
    }

}

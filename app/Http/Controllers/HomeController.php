<?php

namespace App\Http\Controllers;

use App\Models\Calons;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $calons = Calons::all();
        return view('home', compact('calons'));
    }
    public function index2()
    {
        return view('succes');
    }
}

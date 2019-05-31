<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirante;

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
        $aspirantes = Aspirante::withCount(['schools'])
                        ->with('families','schools')
                        ->get();

        return view('Admin.admin', compact('aspirantes'));
        
    }
}


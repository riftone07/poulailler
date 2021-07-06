<?php

namespace App\Http\Controllers;

use App\Models\Poulayer;
use Carbon\Carbon;
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
        $poulayers = Poulayer::whereDate('created_at', Carbon::today())->get();
        return view('home',compact('poulayers'));
    }
}

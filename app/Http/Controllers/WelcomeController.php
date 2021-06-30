<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $lots = Lot::all();

        return view('welcome',compact('lots'));
    }
}

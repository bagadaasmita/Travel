<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopDestinationsController extends Controller
{
    public function index()
    {
        return view('topdestinations.index');
    }
}

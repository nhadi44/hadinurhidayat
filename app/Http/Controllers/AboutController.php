<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $tabMenu = array("Tech Stack", "Tools");
        return view('About', compact('tabMenu'));
    }
}

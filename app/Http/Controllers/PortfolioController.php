<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        return view('portfolio');
    }

    public function showMain()
    {
        return view('projects.main-project');
    }

    public function showPOS()
    {
        return view('projects.pos');
    }

    public function showWebsites()
    {
        return view('projects.web');
    }

    public function showUIDesigns()
    {
        return view('projects.ui');
    }
}

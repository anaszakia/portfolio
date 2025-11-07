<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::latest()->take(3)->get();
        return view('welcome', compact('projects'));
    }

    public function allProjects()
    {
        $projects = Portfolio::latest()->get();
        return view('all-projects', compact('projects'));
    }
}
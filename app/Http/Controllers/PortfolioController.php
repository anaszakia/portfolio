<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::all(); // Ambil semua data portfolio
        return view('welcome', compact('projects'));
    }
}
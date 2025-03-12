<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Index Page
    public function index()
    {
        return view('welcome');
    }
}

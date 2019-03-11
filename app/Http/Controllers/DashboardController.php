<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	//dd($request->query('title', '....'));
    	//var_dump($request->query('title', '....'));
    	return view('dashboard', ['title' => $request->query('title', 'Dashboard ....')]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index() {

    	$title = "BRADO";
    	$description = "";

    	return view('main_page', compact('title', 'description'));
    }
}

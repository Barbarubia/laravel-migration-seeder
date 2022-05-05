<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        $trainsList = Train::all();

        return view('trainsList', compact('trainsList'));
    }
}

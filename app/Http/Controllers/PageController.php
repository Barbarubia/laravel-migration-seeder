<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        $trainsList = Train::orderBy('departure_time')
                                ->paginate(10);

        return view('trainsList', compact('trainsList'));
    }
}

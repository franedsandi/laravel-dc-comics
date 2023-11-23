<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
        $num_comics = Comic::count();
        dump($num_comics);
        return view('home', compact('num_comics'));
    }
}

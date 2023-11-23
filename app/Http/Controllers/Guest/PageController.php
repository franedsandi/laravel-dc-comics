<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comic(){
        $comics = Comic::all();
        return view('home',compact('comics'));
    }
}

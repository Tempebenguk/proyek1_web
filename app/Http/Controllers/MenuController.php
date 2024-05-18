<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    public function home(){
        $data = menu::all();
            return view('layout.home', ['datamenu' => $data]);
    }
}

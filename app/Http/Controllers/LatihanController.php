<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function home() {
        return view('layout.home');
    }

    public function pemesanan() {
        return view('layout.pemesanan');
    }

    public function metode() {
        return view('layout.metode');
    }

    public function pembayaran() {
        return view('layout.pembayaran');
    }
}

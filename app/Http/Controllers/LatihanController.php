<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class LatihanController extends Controller
{

    protected $database;

    public function index()
    {
        $reference = $this->database->getReference('kategori');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();

        return view('firebase.index', compact('value'));
    }

    public function create()
    {

    }

    public function store()
    {

    }
}

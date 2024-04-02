<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('risk.index', compact('clients'));
    }

    public function create()
    {
        return view('risk.create');
    }
}

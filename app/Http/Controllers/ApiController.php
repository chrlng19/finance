<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function riskApi()
    {
        $clients = Client::all();
        return response()->json(['clients' => $clients]);
    }
}

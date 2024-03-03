<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    // This method will show the form for creating new sales data
    public function create()
    {
        return view('sales.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer' => 'required|string',
            'product' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Sale::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Sale created successfully.');
    }
}

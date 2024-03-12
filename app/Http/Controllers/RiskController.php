<?php

// app/Http/Controllers/RiskController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Risk;

class RiskController extends Controller
{
    public function index()
    {
        $risks = Risk::all();
        return view('risks.index', compact('risks'));
    }

    public function create()
    {
        return view('risks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Risk::create($request->all());

        return redirect()->route('risks.index')
            ->with('success', 'Risk created successfully.');
    }

    // Add update, delete methods
}

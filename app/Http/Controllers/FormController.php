<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Symfony\Component\Console\Exception\NamespaceNotFoundException;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'client_name' => 'required',
            'company_name' => 'required',
            /* 'risk_manager' => 'required',
            'commercia_budget' => 'required',
            'currency' => 'required',
            'industry_sector' => 'required',
            'description' => 'required',
            'facility' => 'required',
            'risk_owner' => 'required',
            'date_raised' => 'required',
            'risk_occurrence' => 'required',
            'probability' => 'required',
            'hsse_health_safety' => 'required',
            'hsse_security' => 'required',
            'hsse_environmental' => 'required', */
            // Add other validation rules for additional form fields
        ]); 
        // Create a new client instance
        $client = new Client();
        // $client->client_name = $validatedData['client_name'];
        // Assign form data to the client model properties
        $client->client_name = $request->input('client_name');
        $client->company_name = $request->input('company_name');
        $client->risk_manager = $request->input('risk_manager');
        $client->commercial_budget = $request->input('commercial_budget');
        $client->currency = $request->input('currency');
        $client->industry_sector = $request->input('industry_sector');
        $client->description = $request->input('description');
        $client->facility = $request->input('facility');
        $client->risk_owner = $request->input('risk_owner');
        $client->date_raised = $request->input('date_raised');
        $client->risk_occurrence = $request->input('risk_occurrence');
        $client->risk_bearer = $request->input('risk_bearer');
        $client->probability = $request->input('probability');
        $client->hsse_health_safety = $request->has('hsse_health_safety') ? true : false;
        $client->hsse_security = $request->has('hsse_security') ? true : false;
        $client->hsse_environment = $request->has('hsse_environment') ? true : false;
        // Assign other fields similarly

        // Save the client instance to the database
        $client->save();

        // Redirect back with success message
        return redirect()->route('risk.index')->with('success', 'Form created successfully.');
    }
}

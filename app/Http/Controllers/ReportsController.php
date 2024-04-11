<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportsController extends Controller
{
    public function index()
{
    return view('dashboard');
}

    public function getChartData()
    {
        $reports = Report::select('sales', 'revenue', 'customers', 'report_date')
                         ->orderBy('report_date')
                         ->get();

        $formattedData = $reports->map(function ($report) {
            return [
                'date' => $report->report_date->format('Y-m-d H:i:s'),
                'sales' => $report->sales,
                'revenue' => $report->revenue,
                'customers' => $report->customers,
            ];
        });

        return response()->json($formattedData);
    }
}

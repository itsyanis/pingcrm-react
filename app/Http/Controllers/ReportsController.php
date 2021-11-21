<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Report;
use Illuminate\Support\Facades\Request;
use App\Http\Resources\ReportCollection;

class ReportsController extends Controller
{
    public function index()
    {
        //dd(Report::all());
        return Inertia::render('Reports/Index', [
            "reports" => Report::all()
        ]);
    }
}

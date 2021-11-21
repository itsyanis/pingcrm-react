<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Report;

class ReportsController extends Controller
{
    public function index()
    {
        return Inertia::render('Reports/Index', [
            "reports" => Report::all(),
        ]);
    }
}

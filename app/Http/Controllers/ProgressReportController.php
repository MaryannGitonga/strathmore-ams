<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgressReportController extends Controller
{
    public function index()
    {
        return view('layouts.progress');
    }
}

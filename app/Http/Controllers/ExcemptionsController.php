<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExcemptionsController extends Controller
{
    public function index()
    {
        return view('layouts.Exemptions');
    }
}

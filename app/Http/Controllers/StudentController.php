<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function profile()
    {
        $user = Auth::user()->id;
        return view('dashboard', compact('user'));
    }
    public function exam_card()
    {
        $user = Auth::user()->id;
        return view('examcard', compact('user'));
    }
}

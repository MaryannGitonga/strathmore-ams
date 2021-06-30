<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalDetailsRequest;
use App\Http\Requests\PersonalFilesRequest;
use App\Models\Student;
use App\Models\Unit;
use App\Models\Assessment;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{

    //////////////// Module 1 ////////////////

    public function personal_details()
    {
        $father = Auth::user()->student->parents()->where('gender', 'male')->first();
        $mother = Auth::user()->student->parents()->where('gender', 'female')->first();
        return view('personal', compact('father', 'mother'));
    }

    public function documents()
    {
        return view('fileUpload');
    }

    public function save_details(PersonalDetailsRequest $request, Student $student)
    {
        $validated = $request->validated();

        $student->national_ID = $validated['national_ID'];
        $student->religion = $validated['religion'];
        $student->address = $validated['address'];
        $student->postal_code = $validated['postal_code'];
        $student->home_county = $validated['home_county'];
        $student->residence = $validated['residence'];
        $student->personal_email = $validated['personal_email'];

        $student->update();
        return redirect()->route('account.profile')->with('success', 'Personal details updated successfully');
    }

    public function save_files(PersonalFilesRequest $request, Student $student)
    {
        $validated = $request->validated();

        $student->result_slip = $validated['result_slip'];
        $student->ID_copy = $validated['ID_copy'];

        $student->update();

        return redirect()->route('account.profile')->with('success', 'Personal files uploaded successfully');
    }

    //////////////// End of Module 1 ////////////////



    //////////////// Module 2 ////////////////

    public function register_units() {
        $registered_units = Auth::user()->student->units()->where('status', 'pending')->get();
        return view('registration',compact('registered_units'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function available_units() {
        $units = Unit::all();
        $available_units = array();
        foreach ($units as $unit) {
            if (DB::table('student_unit')->where('unit_id', $unit->id)->where('student_id', Auth::user()->student->id)->doesntExist()) {
                array_push($available_units, $unit);
            }
        }

        return view('available_units',compact('available_units'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function retakes() {
        $units = Unit::all();
        $retakes = array();
        foreach ($units as $unit) {
            if (DB::table('student_unit')->where('unit_id', $unit->id)->where('student_id', Auth::user()->student->id)->where('status', 'retake')->exists()) {
                array_push($retakes, $unit);
            }
        }
        return view('retake', compact('retakes'));
    }

    public function register_unit(Unit $unit)
    {
        $unit->students()->attach(Auth::user()->student->id);

        return redirect()->route('available')->with('success', 'Unit registered successfully');
    }

    //////////////// End of Module 2 ////////////////




    //////////////// Module 3 ////////////////

    public function course_work()
    {
        return view('coursework_marks');
    }

    // public function coursework(){
    //     $user = Auth::user()->id;
    //     $assessments = Assessment::all();
    //     $scores = Score::all();
    //     return view('coursemark', compact('user', 'assessments','scores'));
    // }

    public function download_coursework()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('coursework_marks');
        Log::info(print_r($pdf->loadView('coursework_marks'), true));
        return $pdf->download('coursework-marks.pdf');
    }

    //////////////// End of Module 3 ////////////////




    //////////////// Module 4 ////////////////
    public function profile()
    {
        $user = Auth::user()->id;
        return view('dashboard', compact('user'));
    }
    public function progress()
    {
        $user = Auth::user()->id;
        return view('report', compact('user'));
    }

    public function exam_card()
    {
        $user = Auth::user()->id;
        return view('examcard', compact('user'));
    }

    public function attendance($academic_year)
    {
        $units = Auth::user()->student->units()->where('year', $academic_year)->get();
        return back()->compact('units');
    }

    //////////////// End of Module 4 ////////////////



    //////////////// Module 5 ////////////////
    public function fees_structure()
    {
        return view('feesstructure');
    }

    //////////////// End of Module 5 ////////////////

}

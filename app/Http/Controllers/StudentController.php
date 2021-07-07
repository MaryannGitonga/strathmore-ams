<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalDetailsRequest;
use App\Http\Requests\PersonalFilesRequest;
use App\Models\Student;
use App\Models\Unit;
use App\Models\Assessment;
use App\Models\Fee;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Arr;

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

    public function coursework(){

        return view('coursemark', compact('user', 'assessments','scores'));
    }

    //////////////// End of Module 3 ////////////////




    //////////////// Module 4 ////////////////
    public function profile()
    {
        $user = Auth::user()->id;
        $loaned_items = Auth::user()->student->loaned_items()->get();

        return view('dashboard', compact('user', 'loaned_items'));
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
        $first_semester = Auth::user()->student->units()->where('year', $academic_year)->where('semester', 1)->get();
        $second_semester = Auth::user()->student->units()->where('year', $academic_year)->where('semester', 2)->get();
        return view('attendance', compact('first_semester', 'second_semester'));
    }

    public function attendance_details(Unit $unit)
    {
        $records = $unit->attendance_records()->where('student_id', Auth::user()->student->id)->get();
        return view('attendance_details', compact('records'));
    }

    //////////////// End of Module 4 ////////////////



    //////////////// Module 5 ////////////////
    public function fees_structure()
    {
        return view('feesstructure');
    }

    public function fees_statements($year)
    {
        $fees_statements = Auth::user()->student->fees()->get();

        $invoice_total = $fees_statements->where('document_type', 'invoice')->sum('amount');
        $receipt_total = $fees_statements->where('document_type', 'receipt')->sum('amount');

        $invoices = array();
        $receipts = array();
        foreach ($fees_statements as $fee) {
            if (Carbon::parse($fee->date)->format('Y') == $year) {
                if ($fee->document_type == 'invoice') {
                    array_push($invoices, $fee);
                }
                else if ($fee->document_type == 'receipt') {
                    array_push($receipts, $fee);
                }
            }
        }

        return view('feestatement', compact('invoices', 'receipts', 'receipt_total', 'invoice_total'));
    }

    public function download_statements()
    {
        $fees = Fee::all();
        $pdf = PDF::loadView('fees.fees_pdf', compact('fees'));
        return $pdf->download('pdf');
    }

    //////////////// End of Module 5 ////////////////

}

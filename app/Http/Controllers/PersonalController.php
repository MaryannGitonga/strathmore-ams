<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;



class PersonalController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //$user = Auth::user();
       // $user = Student::where('user_id',Auth::user());
      $user = Auth::user();
        //$student = Student::where('user_id', $user->id);
        return view('layouts.personal', compact('user'));
    }



  //  public function profileUpdate(Request $request){

      //  $request->validate([
        //    'national_ID' =>'required',
          //  'phone' =>'required',
            //'residence' =>'required',
            //'address' =>'required',
            //'home_county' =>'required',
            //'religion' =>'required'
        //]);
        //$user = Auth::user();
        //$user->national_ID = $request['national_ID'];
        //$user->phone = $request['phone'];
        //$user->residence = $request['residence'];
        //$user->address = $request['address'];
        //$user->home_county = $request['home_county'];
      //  $user->religion = $request['religion'];
       // $user->save();
      //  return back()->with('message','Profile Updated');
 //   }
}


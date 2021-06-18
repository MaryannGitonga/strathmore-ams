<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }
    public function index()
    {
        return view('layouts.fileupload');
    }

   // public function store(Request $request){
     //   $request->validate([
       //     'name'=>'required'
        //]);
        //$file = Auth::file();
        //$file->name = $request['name'];

        //$file->save();
        //return back()-> with('message', 'Your file is submitted successfully.');


   // }
}



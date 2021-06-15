<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $doctor =Doctor::paginate(2);
      
        if (request()->has('specialty')) {
           $doctor = Doctor::where('speciality', 'LIKE', '%' . request()->get('specialty') . '%')->where('zip_code', 'LIKE', '%' . request()->get('zip_code') . '%')->get();
          if(!count($doctor)){
            return back()->with('errors','No results found. Please try another one again!');
          }
        } 
        
        return view('jen/pages/home',[
            'doctor' =>$doctor,
        ]);
    }

    public function aboutUs(){
      return view('jen.pages.new-home');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    
        $doctor =Doctor::paginate(2);
        if (request()->has('specialty')) {
          $doctor = Doctor::where('speciality', 'LIKE', '%' . request()->get('specialty') . '%')->where('country', 'LIKE', '%' . request()->get('country') . '%')->where('address', 'LIKE', '%' . request()->get('address') . '%')->get();
        } 
        return view('jen/pages/home',[
            'doctor' =>$doctor,
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            if (is_null(auth()->user()->paid)) {
                return redirect()->route('payment');
            }
        }
        $doctor = null;

        if (request()->has('specialty')) {
            $specialityDoctors = DoctorSpeciality::where('speciality', request()->get('specialty'))->pluck('doctor_id');
            $doctor = Doctor::whereIn('id', $specialityDoctors)
                ->where('zip_code', 'LIKE', '%' . request()->get('zip_code') . '%')
                ->get();
            if (!count($doctor)) {
                return back()->with('errors', 'No results found. Please try another one again!');
            }
        }

        return view('jen/pages/home', [
            'doctor' => $doctor,
        ]);
    }

    public function aboutUs()
    {
        return view('jen.pages.new-home');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRegisterRequest;
use App\Http\Requests\RegisterClientRequest;
use App\Models\Depart;
use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $speciality = Depart::get();
        return view('jen/pages/register', [
            'speciality' => $speciality,
        ]);
    }

    public function indexClient()
    {
        return view('jen/pages/registerClient');
    }

    public function registerDoctor(DoctorRegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->company_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if ($user) {
            $doctor = new Doctor();
            $doctor->name = $request->company_name;
            $doctor->zip_code = $request->zip_code;

            $doctor->phone = $request->phone;
            $doctor->user_id = $user->id;
            $doctor->save();
        }
        if ($doctor) {
            $specilaity = new DoctorSpeciality();
            $specilaity->speciality = $request->speciality;
            $specilaity->doctor_id = $doctor->id;
            $specilaity->save();
        }

        if ($user || $doctor) {
            return redirect()->route('login');
        }
    }
}

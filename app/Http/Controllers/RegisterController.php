<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRegisterRequest;
use App\Http\Requests\RegisterClientRequest;
use App\Models\Depart;
use App\Models\Doctor;
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
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if ($user) {
            $user->role()->attach(1);
            $doctor = new Doctor();
            $doctor->name = $request->first_name;
            $doctor->surname = $request->last_name;
            $doctor->speciality = $request->speciality;
            $doctor->country = $request->country;
            $doctor->address = $request->address;
            $doctor->phone = $request->phone;
            $doctor->user_id = $user->id;
            $doctor->save();
        }

        if ($user || $doctor) {
            return redirect()->route('login');
        }
    }

    public function registerClient(RegisterClientRequest $request)
    {
        $user = new User();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        if ($user) {
            $user->role()->attach(2);   
            return redirect()->route('login');
        }
    }
}

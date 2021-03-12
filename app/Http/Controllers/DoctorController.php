<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index(){

        $id = Auth::id();

        return $user = User::with('doctor')->where('id',$id)->get();

        return view('jen/doctors/index');
        
    }
}

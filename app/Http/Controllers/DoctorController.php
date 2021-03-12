<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index(){

        $id = Auth::id();

          $user = User::with('doctor','schedule')->where('id',$id)->get();

        return view('jen/doctors/index',[
            'user'=>$user,
        ]);
        
    }

    public function createSchedule(Request $request){
        $id = Auth::id();

          $user = User::with('doctor')->where('id',$id)->get();
       return view('jen/doctors/schedule',[
        'user'=>$user,
       ]);
    }

    public function addSchedule(Request $request){

        for ($i = 0; $i < count($request['day']); $i++) {
           $work = WorkSchedule::create([
                'day' => $request['day'][$i],
                'start' => $request['start'][$i],
                'end' => $request['end'][$i],
                'user_id' => Auth::id(),
                
            ]);
        
        }
        if($work){
            return redirect()->back();
        }
      
    }
}

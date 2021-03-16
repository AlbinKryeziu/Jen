<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterClientRequest;
use App\Http\Requests\ScheduleRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Doctor;
use App\Models\User;
use App\Models\WorkSchedule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        $id = Auth::id();

        $user = User::with('doctor', 'schedule')
            ->where('id', $id)
            ->get();

        return view('jen/doctors/index', [
            'user' => $user,
        ]);
    }

    public function createSchedule(Request $request)
    {
        $id = Auth::id();
        $user = User::with('doctor')
            ->where('id', $id)
            ->get();
        return view('jen/doctors/schedule', [
            'user' => $user,
        ]);
    }

    public function addSchedule(ScheduleRequest $request)
    {
        for ($i = 0; $i < count($request['day']); $i++) {
            $work = WorkSchedule::create([
                'day' => $request['day'][$i],
                'start' => $request['start'][$i],
                'end' => $request['end'][$i],
                'user_id' => Auth::id(),
            ]);
        }
        if ($work) {
            return redirect()->back();
        }
    }
    public function editProfileDoctor($doctorId)
    {
        $user = User::with('doctor')
            ->where('id', $doctorId)
            ->get();

        return view('jen/doctors/edit-profile', [
            'user' => $user,
        ]);
    }
    public function updateProfileDoctor(UpdateProfileRequest $request)
    {
        $user = Doctor::where('user_id', Auth::id())->update([
            'name' => $request->first_name,
            'surname' => $request->last_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'country' => $request->country,
        ]);
        if ($user) {
            return redirect()->back();
        }
    }

    public function editWorkDoctor()
    {
        $user = User::with('doctor')
            ->where('id', Auth::id())
            ->get();

        return view('jen/doctors/edit-work', [
            'user' => $user,
        ]);
    }

    public function updateWorkDoctor(UpdateWorkRequest $request)
    {
        $doctor = Doctor::where('user_id', Auth::id())->update([
            'speciality' => $request->speciality,
            'workEnvironment' => $request->workEnvironment,
            'services' => $request->services,
            'license' => $request->license,
            'website' => $request->website,
        ]);
        if ($doctor) {
            return redirect()->back();
        }
    }

    public function profileDoctorDetails($doctorId)
    {
        $user = User::with('doctor', 'schedule')
            ->where('id', $doctorId)
            ->get();
        return view('jen/doctors/profile', [
            'user' => $user,
        ]);
    }

    public function editSchedule()
    {
        $id = Auth::id();
        $user = User::with('doctor', 'schedule')
            ->where('id', $id)
            ->get();
        return view('jen/doctors/edit_schedule', [
            'user' => $user,
        ]);
    }

    public function updateSchedule(Request $request)
    {
        $schedule = WorkSchedule::where('id', $request->scheduleId)->update([
            'day' => $request->day,
            'start' => $request->start,
            'end' => $request->end,
        ]);
        if ($schedule) {
            return back();
        }
    }

    public function deteleSchedule(Request $request)
    {
        $schedule = WorkSchedule::where('id', $request->id)->delete();
        if ($schedule) {
            return back();
        }
    }

    public function deleteMultipleSchedule()
    {
        $schedule = WorkSchedule::where('user_id', Auth::id())->delete();
        if ($schedule) {
            return back();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterClientRequest;
use App\Http\Requests\ScheduleRequest;
use App\Http\Requests\SocialReqeust;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Depart;
use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\SocialLink;
use App\Models\User;
use App\Models\WorkSchedule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\Specificity;

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
            return back()->with('success', 'The action  was completed successfully');
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

            'phone' => $request->phone,
            'zip_code' => $request->zip_code,
        ]);
        if ($user) {
            return back()->with('success', 'The action  was completed successfully');
        }
    }

    public function editWorkDoctor()
    {
        $speacility = Depart::get();
        $user = User::with('doctor')
            ->where('id', Auth::id())
            ->get();

        return view('jen/doctors/edit-work', [
            'user' => $user,
            'speacility' => $speacility,
        ]);
    }

    public function updateWorkDoctor(UpdateWorkRequest $request)
    {
        
        $doctor = Doctor::where('user_id', Auth::id())->update([
            'services_1' => $request->services_1,
            'services_2' => $request->services_2,
            'services_3' => $request->services_3,
            'price_1' => $request->price_1,
            'price_2' => $request->price_2,
            'price_3' => $request->price_3,
        ]);
        if ($doctor) {
            return back()->with('success', 'The action  was completed successfully');
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
            return back()->with('success', 'The action  was completed successfully');
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
            return back()->with('success', 'The action  was completed successfully');
        }
    }

    public function socialMedia()
    {
        $id = Auth::id();
        $user = User::with('doctor', 'schedule')
            ->where('id', $id)
            ->get();
        return view('jen/doctors/add_social', [
            'user' => $user,
        ]);
    }
    public function addSocialMedia(SocialReqeust $request)
    {
        $social = SocialLink::create([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'website' => $request->website,
            'other' => $request->other,
            'user_id' => Auth::id(),
        ]);
        if ($social) {
            return back();
        }
    }

    public function editSocialmedia()
    {
        $social = SocialLink::where('user_id', Auth::id())->first();
        $id = Auth::id();
        $user = User::with('doctor', 'schedule')
            ->where('id', $id)
            ->get();
        return view('jen/doctors/edit-social', [
            'social' => $social,
            'user' => $user,
        ]);
    }

    public function updateSocialmedia(SocialReqeust $request)
    {
        $social = SocialLink::where('user_id', Auth::id())->update([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'website' => $request->website,
            'other' => $request->other,
            'user_id' => Auth::id(),
        ]);

        if ($social) {
            return back()->with('success', 'The action  was completed successfully');
        }
    }

    public function photoProfile()
    {
        $id = Auth::id();
        $user = User::with('doctor', 'schedule')
            ->where('id', $id)
            ->get();
        return view('jen/doctors/photo', [
            'user' => $user,
        ]);
    }
    public function storeProfilePhoto(Request $request)
    {
        if ($request->has('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('store'), $imageName);
        } else {
            $imageName = null;
        }
        $doctorProfilePhoto = Doctor::where('user_id', Auth::id())->first();
        if ($doctorProfilePhoto->profilePath) {
            if (file_exists(public_path('store/' . $doctorProfilePhoto->profilePath))) {
                unlink(public_path('store/' . $doctorProfilePhoto->profilePath));
            }
        }
        $user = Doctor::where('user_id', Auth::id())->update([
            'profilePath' => $imageName,
        ]);
        if ($user) {
            return back()->with('success', 'The photo has been successfully changed');
        }
    }

    public function speciaality(Request $request)
    {
        $doctorId = Doctor::where('user_id', Auth::id())->first();
        for ($i = 0; $i < count($request['speciality']); $i++) {
            $menagerAuth = DoctorSpeciality::create([
                'speciality' => $request['speciality'][$i],
                'doctor_id' => $doctorId->id,
            ]);
        }

        return back();
    }

    public function deleteSpeciality(Request $request)
    {
        $checkSpeciality = DoctorSpeciality::findOrFail($request->id);

        if ($checkSpeciality->delete()) {
            return back()->with('success', 'The Speciality was successfully deleted');
        }
    }
}

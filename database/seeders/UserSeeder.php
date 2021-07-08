<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleName = new Role();
        $roleName->name= 'Doctor';
        $roleName->slug = 'doctor';
        $roleName->save();

        $user = new User();
        $user->name = 'SelfPaynet';
        $user->email = 'spn@selfpaynet.com';
        $user->password = Hash::make('password');
        $user->paid = Carbon::now()->toDateTimeString();
        $user->save();
        $user->role()->attach(1);
        
        $doctor = new Doctor();
        $doctor->name = $user->name;
        $doctor->phone ='1111111';
        $doctor->user_id = $user->id;
        $doctor->zip_code = '32003';
        $doctor->save();
        $specilaity =  new DoctorSpeciality();
        $specilaity->speciality ='Anesthesiology';
        $specilaity->doctor_id = $doctor->id;
        $specilaity->save();
     }
}

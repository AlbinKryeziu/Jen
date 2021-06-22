<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $fillable = [
        'name',
        'surname',
        'speciality',
        'country',
        'address',
        'phone',
        'profilePath',
        'user_id',
    ];


    public function specialitizies(){
        return $this->hasMany(DoctorSpeciality::class);
    }
}

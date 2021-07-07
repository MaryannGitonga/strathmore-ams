<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StudentUnit;

class Unit extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsToMany(Student::class)->withPivot('status','score');
    }

    public function attendance_records()
    {
        return $this->hasMany(UnitAttendance::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

}

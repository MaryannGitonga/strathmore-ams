<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function units()
    {
        return $this->belongsToMany(Unit::class);
    }

}

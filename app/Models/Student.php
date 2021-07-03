<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'admission_no',
        'year',
        'prev_school',
        'phone',
        'dob',
        'national_ID',
        'address',
        'home_county',
        'religion'
    ];


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

    public function parents()
    {
      return $this->hasMany(StudentParent::class);
    }

    public function loaned_items()
    {
      return $this->hasMany(LoanItem::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

}

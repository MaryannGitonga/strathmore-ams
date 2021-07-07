<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StudentUnit;

class Assessment extends Model
{
   // use HasFactory;
   public function unit()
   {
       return $this->belongsTo(StudentUnit::class);
   }
}

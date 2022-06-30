<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function group()
    {
        return $this->belongsTo(Group::class)->withDefault();
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class)->withDefault();
    }
    public function allotment()
    {
        return $this->hasOne(Allotment::class)->withDefault();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public function class()
    {
        return $this->belongsTo(Group::class)->withDefault();
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class)->withDefault();
    }
}

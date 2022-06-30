<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allotment extends Model
{
    use HasFactory;

    // protected $primaryKey = 'group_id';
    public function student()
    {
        return $this->belongsTo(Student::class)->withDefault();
    }
    public function room()
    {
        return $this->belongsTo(Room::class)->withDefault();
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class)->withDefault();
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class)->withDefault();
    }

}

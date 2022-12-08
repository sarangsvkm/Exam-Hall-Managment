<?php

namespace App\Http\Controllers;

use App\Models\Allotment;
use App\Models\Exam;
use App\Models\Group;
use App\Models\Room;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(){
        if (Auth::user()->role == "student") {
            $allotment = Allotment::where('student_id',Auth::user()->student_id)->get();
            // dd($allotment);
            return view('dashboard.student_page',compact('allotment'));
        }
        if (Auth::user()->role == "admin")
        {
            $user = User::get()->count();
            $exam = Exam::get()->count();
            $room = Room::get()->count();
            $students = Student::get()->count();
            $subject = Subject::get()->count();
            $teacher = Teacher::get()->count();
            $class = Group::get()->count();

            return view('dashboard.admin')->with(['user'=> $user,'exam'=> $exam,'class'=>$class,'student'=>$students,'room' =>$room,'subject' =>$subject,'teacher' =>$teacher]);;
        }

        return redirect(route('error'));
        }

        public function logout()
        {
            Auth::logout();
            return redirect(route('login'));
        }
}

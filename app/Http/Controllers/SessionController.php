<?php

namespace App\Http\Controllers;

use App\Models\Allotment;
use App\Models\Assignment;
use App\Models\Exam;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function allotment()
    {
        if (session()->has('allotment') == null) {
            session()->put('allotment', 'roomtype');
            return view('allotment');
        }
        if (session()->has('allotment')) {
            session()->forget('allotment');
            return view('allotment');
        }

    }
    public function allotment_post(Request $request)
    {
        if (session()->get('allotment') == 'roomtype') {
            $room = Room::where('type_id', '=', $request->roomtype)->get();
            $subject = Subject::where('id', '=', $request->subject)->first();
            $group_id = $subject->group_id;
            // $student = Student::where('group_id', '=', $group_id)->get();
            $type = Type::where('id', $request->roomtype)->first();

            $student = DB::table("students")->where('group_id', '=', $group_id)->select('*')->whereNotIn('id', function ($query) use ($request) {
                $query->select('student_id')->from('allotments')->where('exam_id', '=', $request->exam);
            })->get();
            $examdetails = Exam::where('id', '=', $request->exam)->first();
            session()->put('group_id', $subject->group_id);
            session()->put('type_id', $request->roomtype);
            session()->put('subject_id', $subject->id);
            session()->put('exam_id', $request->exam);
            session()->put('exam_date', $examdetails->exam_date);
            session()->put('start_time', $examdetails->start_time);
            session()->put('end_time', $examdetails->end_time);
            session()->put('allotment', $type->roomname);
            return view('allotment', compact('room', 'subject', 'student'));
        }

        // Hall
        if (session()->get('allotment') == 'Hall') {
            $studentdetails = Student::where('id', '=', $request->student)->first();
            $countstudent = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->get();
            $capacity =Room::where('id',$request->room_id)->first();
            $countsubject = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->where('subject_id', $request->subject_id)->where('exam_date', $request->exam_date)->where('start_time', $request->start_time)->get();
            // dd($capacity->strenght);
            if ($countstudent->count() < $capacity->strenght) {

                if($countsubject->count() < $capacity->strenght/2){

                // variables created to fill Assignment table
                $name = $request->student;
                $group_id = $request->group_id;
                $type_id = $request->type_id;
                $subject_id = $request->subject_id;
                $exam_id = $request->exam_id;

                // variables created to fill Allotment table
                $exam_date = $request->exam_date;
                $start_time = $request->start_time;
                $end_time = $request->end_time;
                $room_id = $request->room_id;
                $name = $request->student;
                $rollnumber = $request->rollnumber;

                $assignment = new Assignment();
                $assignment->group_id = session()->get('group_id');
                $assignment->type_id = session()->get('type_id');
                $assignment->subject_id = session()->get('subject_id');
                $assignment->exam_id = session()->get('exam_id');
                $assignment->room_id =$room_id;
                $assignment->save();

                for ($i = 0; $i < count($name); $i++)
                {
                    $allotment = [
                        'student_id' => $name[$i],
                        'assignment_id' => $assignment->id,
                        'exam_id' => $exam_id[$i],
                        'subject_id' =>$subject_id[$i],
                        'exam_date' => $exam_date[$i],
                        'start_time' => $start_time[$i],
                        'end_time' => $end_time[$i],
                        'room_id' => $room_id,
                        'rollnumber' => $rollnumber[$i]
                    ];
                    Allotment::insert($allotment);
                }
                session()->forget('allotment');
                return "success";
            }
            else{
                return "NOT Possible";
            }
            }

            else
            {
                return "<h1>NOT POSSIBLE</h1>";
            }
        }

        // Lab
        if (session()->get('allotment') == 'Lab')
        {
            $studentdetails = Student::where('id', '=', $request->student)->first();
            // $countstudent = Allotment::where('exam_id', session()->get('exam_id'))->where('room_id', $request->room)->get();
            $countstudent = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->get();
            // dd($countstudent->count());
            $countsubject = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->where('subject_id', $request->subject_id)->where('exam_date', $request->exam_date)->where('start_time', $request->start_time)->get();
            $capacity =Room::where('id',$request->room_id)->first();
            // dd($capacity->strenght);
            if ($countstudent->count() < $capacity->strenght) {

                if($countsubject->count() < $capacity->strenght/2){

                // variables created to fill Assignment table
                $name = $request->student;
                $group_id = $request->group_id;
                $type_id = $request->type_id;
                $subject_id = $request->subject_id;
                $exam_id = $request->exam_id;

                // variables created to fill Allotment table
                $exam_date = $request->exam_date;
                $start_time = $request->start_time;
                $end_time = $request->end_time;
                $room_id = $request->room_id;
                $name = $request->student;
                $rollnumber = $request->rollnumber;

                $assignment = new Assignment();
                $assignment->group_id = session()->get('group_id');
                $assignment->type_id = session()->get('type_id');
                $assignment->subject_id = session()->get('subject_id');
                $assignment->exam_id = session()->get('exam_id');
                $assignment->room_id =$room_id;
                $assignment->save();

                for ($i = 0; $i < count($name); $i++)
                {
                    $allotment = [
                        'student_id' => $name[$i],
                        'assignment_id' => $assignment->id,
                        'exam_id' => $exam_id[$i],
                        'subject_id' =>$subject_id[$i],
                        'exam_date' => $exam_date[$i],
                        'start_time' => $start_time[$i],
                        'end_time' => $end_time[$i],
                        'room_id' => $room_id,
                        'rollnumber' => $rollnumber[$i]
                    ];
                    Allotment::insert($allotment);
                }
                session()->forget('allotment');
                return "success";
            }
            else{
                return "NOT Possible";
            }
            }

            else
            {
                return "<h1>NOT POSSIBLE</h1>";
            }
        }

        // Classroom
        if (session()->get('allotment') == 'Classroom') {
            $studentdetails = Student::where('id', '=', $request->student)->first();
            // $countstudent = Allotment::where('exam_id', session()->get('exam_id'))->where('room_id', $request->room)->get();
            $countstudent = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->get();
            $countsubject = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->where('subject_id', $request->subject_id)->where('exam_date', $request->exam_date)->where('start_time', $request->start_time)->get();
            // dd($countsubject);
            $capacity =Room::where('id',$request->room_id)->first();
            // dd($capacity->strenght);
            if ($countstudent->count() < $capacity->strenght) {

                if($countsubject->count() < $capacity->strenght/2){

                // variables created to fill Assignment table
                $name = $request->student;
                $group_id = $request->group_id;
                $type_id = $request->type_id;
                $subject_id = $request->subject_id;
                $exam_id = $request->exam_id;

                // variables created to fill Allotment table
                $exam_date = $request->exam_date;
                $start_time = $request->start_time;
                $end_time = $request->end_time;
                $room_id = $request->room_id;
                $name = $request->student;
                $rollnumber = $request->rollnumber;

                $assignment = new Assignment();
                $assignment->group_id = session()->get('group_id');
                $assignment->type_id = session()->get('type_id');
                $assignment->subject_id = session()->get('subject_id');
                $assignment->exam_id = session()->get('exam_id');
                $assignment->room_id =$room_id;
                $assignment->save();

                for ($i = 0; $i < count($name); $i++)
                {
                    $allotment = [
                        'student_id' => $name[$i],
                        'assignment_id' => $assignment->id,
                        'exam_id' => $exam_id[$i],
                        'subject_id' =>$subject_id[$i],
                        'exam_date' => $exam_date[$i],
                        'start_time' => $start_time[$i],
                        'end_time' => $end_time[$i],
                        'room_id' => $room_id,
                        'rollnumber' => $rollnumber[$i]
                    ];
                    Allotment::insert($allotment);
                }
                session()->forget('allotment');
                return "success";
            }
            else{
                return "NOT Possible";
            }
            }

            else
            {
                return "<h1>NOT POSSIBLE</h1>";
            }
        }

        // Auditorium
        if (session()->get('allotment') == 'Auditorium') {
            $studentdetails = Student::where('id', '=', $request->student)->first();

            $countstudent = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->get();
            $countsubject = Allotment::where('exam_id', $request->exam_id)->where('room_id', $request->room_id)->where('subject_id', $request->subject_id)->where('exam_date', $request->exam_date)->where('start_time', $request->start_time)->get();
            $capacity =Room::where('id',$request->room_id)->first();
            // dd($capacity->strenght);
            if ($countstudent->count() < $capacity->strenght) {

                if($countsubject->count() < $capacity->strenght/2){

                // variables created to fill Assignment table
                $name = $request->student;
                $group_id = $request->group_id;
                $type_id = $request->type_id;
                $subject_id = $request->subject_id;
                $exam_id = $request->exam_id;

                // variables created to fill Allotment table
                $exam_date = $request->exam_date;
                $start_time = $request->start_time;
                $end_time = $request->end_time;
                $room_id = $request->room_id;
                $name = $request->student;
                $rollnumber = $request->rollnumber;

                $assignment = new Assignment();
                $assignment->group_id = session()->get('group_id');
                $assignment->type_id = session()->get('type_id');
                $assignment->subject_id = session()->get('subject_id');
                $assignment->exam_id = session()->get('exam_id');
                $assignment->room_id =$room_id;
                $assignment->save();

                for ($i = 0; $i < count($name); $i++)
                {
                    $allotment = [
                        'student_id' => $name[$i],
                        'assignment_id' => $assignment->id,
                        'exam_id' => $exam_id[$i],
                        'subject_id' =>$subject_id[$i],
                        'exam_date' => $exam_date[$i],
                        'start_time' => $start_time[$i],
                        'end_time' => $end_time[$i],
                        'room_id' => $room_id,
                        'rollnumber' => $rollnumber[$i]
                    ];
                    Allotment::insert($allotment);
                }
                session()->forget('allotment');
                return "success";
            }
            else{
                return "NOT Possible";
            }
            }

            else
            {
                return "<h1>NOT POSSIBLE</h1>";
            }
        }
    }
}

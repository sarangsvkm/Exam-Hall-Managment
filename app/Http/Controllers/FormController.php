<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Room;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;


class FormController extends Controller
{
    public function roomadd(Request $request)
    {
        $room =new Room();
        $room->name =$request->name;
        $room->strenght =$request->strenght;
        $room->type_id =$request->type_id;
        $room->save();

        return redirect(route('room'));
    }
    public function room_edit($id){
        $room = Room::find($id);
        // dd($class);
        return view('adminpanel.edit.room',compact('room'));
    }
     public function room_editpost(Request $request, $id){
        $room = Room::find($id);
        $room->name =$request->name;
        $room->strenght =$request->strenght;
        $roomtype =Type::where('roomname',$request->type_id)->first();
        $room->type_id =$roomtype->id;
        $room->update();
        return redirect(route('room'));
        // return view('adminpanel.create.tables.room');
    }
    public function room_del($id){
        $room= Room::find($id);
        $room->delete();
        return redirect(route('room'));
    }
    public function room_view($id){
        $room= Room::find($id);
        // dd($class);
        return view('adminpanel.view.room',compact('room'));
    }





    public function roomtypeadd(Request $request)
    {
        $roomtype =new Type();
        $roomtype->roomname =$request->roomname;
        $roomtype->save();

        return redirect(route('roomtable'));
    }
    public function roomtype_edit($id){
        $roomtype = Type::find($id);

        // dd($class);
        return view('adminpanel.edit.roomtype',compact('roomtype'));
    }
     public function roomtype_editpost(Request $request, $id){
        $roomtype = Type::find($id);
        $roomtype->roomname =$request->roomname;
        $roomtype->update();
        return view('adminpanel.create.tables.roomtype');
    }
    public function roomtype_del($id){
        $roomtype= Type::find($id);
        $roomtype->delete();
        return redirect(route('dashboard.roomtable'));
    }
    public function roomtype_view($id){
        $roomtype= Type::find($id);
        // dd($class);
        return view('adminpanel.view.roomtype',compact('roomtype'));
    }









    public function teacheradd(Request $request)

    {
        $teacher = new Teacher();
        $teacher->subject_id = $request->subject_id;
        $teacher->group_id = $request->group_id;
        // $teacher->subjectname = $request->subjectname;
        $teacher->tfname = $request->tfname;
        $teacher->tlname = $request->tlname;
        $teacher->temail = $request->temail;
        $teacher->tgender = $request->tgender;
        $teacher->tdob = $request->tdob;
        $teacher->taddress = $request->taddress;
        $teacher->tcontact = $request->tcontact;
        $teacher->save();

        return redirect(route('dashboard.teacher'));

    }
    public function teacher_edit($id){
        $teacher = teacher::find($id);
        // dd($class);
        return view('adminpanel.edit.teacher',compact('teacher'));
    }
     public function teacher_editpost(Request $request, $id){
        $teacher = teacher::find($id);
        $teacher->subject_id = $request->subject_id;
        $teacher->group_id = $request->group_id;
        // $teacher->subjectname = $request->subjectname;
        $teacher->tfname = $request->tfname;
        $teacher->tlname = $request->tlname;
        $teacher->temail = $request->temail;
        $teacher->tgender = $request->tgender;
        $teacher->tdob = $request->tdob;
        $teacher->taddress = $request->taddress;
        $teacher->tcontact = $request->tcontact;
        $teacher->update();
        return redirect(route('dashboard.teacher'));
    }
    public function teacher_del($id){
        $teacher= teacher::find($id);
        $teacher->delete();
        return redirect(route('dashboard.teacher'));
    }
    public function teacher_view($id){
        $teacher= teacher::find($id);
        // dd($class);
        return view('adminpanel.view.teacher',compact('teacher'));
    }






    public function examadd(Request $request)
    {
        $exam =new Exam();
        $exam->group_id =$request->group_id;
        $exam->subject_id =$request->subject_id;
        $exam->name =$request->name;
        $exam->exam_date =$request->exam_date;
        $exam->start_time =$request->start_time;
        $exam->end_time =$request->end_time;
        $exam->save();

        return redirect(route('dashboard.examtable'));
    }

public function exam_edit($id){
        $exam = Exam::find($id);
        // dd($class);
        return view('adminpanel.edit.exam',compact('exam'));
    }
     public function exam_editpost(Request $request, $id){


        $exam = Exam::find($id);
        $exam->group_id =$request->group_id;
        $exam->subject_id =$request->subject_id;
        $exam->name =$request->name;
        $exam->exam_date =$request->exam_date;
        $exam->start_time =$request->start_time;
        $exam->end_time =$request->end_time;
        $exam->update();
        return redirect(route('dashboard.examtable'));
    }
    public function exam_del($id){
        $exam= Exam::find($id);
        $exam->delete();
        return redirect(route('dashboard.examtable'));
    }
    public function exam_view($id){
        $exam= Exam::find($id);
        // dd($class);
        return view('adminpanel.view.exam',compact('exam'));
    }







    public function studentatt(Request $request)
    {
        $student = new Student();
        // $student->subject_id = $request->subject_id;
        $student->group_id = $request->group_id;
        $student->rollnumber = $request->rollnumber;
        $student->sfname = $request->sfname;
        $student->slname = $request->slname;
        $student->semail = $request->semail;
        $student->sgender = $request->sgender;
        $student->sdob = $request->sdob;
        $student->user_id =Auth::user()->id;
        $student->saddress = $request->saddress;
        $student->scontact = $request->scontact;
        $student->save();

        return redirect(route('dashboard.studentview'));



    }

    public function student_edit($id){
        $student = Student::find($id);
        // dd($class);
        return view('adminpanel.edit.student',compact('student'));
    }
     public function student_editpost(Request $request, $id){


        $student = Student::find($id);
        $student->group_id = $request->group_id;
        $student->rollnumber = $request->rollnumber;
        $student->sfname = $request->sfname;
        $student->slname = $request->slname;
        $student->semail = $request->semail;
        $student->sgender = $request->sgender;
        $student->sdob = $request->sdob;
        $student->user_id =Auth::user()->id;
        $student->saddress = $request->saddress;
        $student->scontact = $request->scontact;
        $student->update();
        return redirect(route('dashboard.studentview'));
    }
    public function student_del($id){
        $student= Student::find($id);
        $student->delete();
        return redirect(route('dashboard.studentview'));
    }
    public function student_view($id){
        $student= Student::find($id);
        // dd($class);
        return view('adminpanel.view.student',compact('student'));
    }





    public function subjectadd(Request $request)
    {
        $subject =new Subject();
        $subject->group_id =$request->group_id;
        $subject->subjectname =$request->subjectname;
        $subject->save();

        return redirect(route('dashboard.subjecttable'));
    }
    public function subject_edit($id){
        $subject = Subject::find($id);
        // dd($class);
        return view('adminpanel.edit.subject',compact('subject'));
    }
     public function subject_editpost(Request $request, $id){
        $subject = Subject::find($id);
        $subject->group_id =$request->group_id;
        $subject->subjectname =$request->subjectname;
        $subject->update();
        return view('adminpanel.create.tables.subject');
    }
    public function subject_del($id){
        $subject= Subject::find($id);
        $subject->delete();
        return redirect(route('dashboard.subjecttable'));
    }
    public function subject_view($id){
        $subject= Subject::find($id);
        // dd($class);
        return view('adminpanel.view.subject',compact('subject'));
    }










    public function classadd(Request $request)
    {
        $class = new Group();
        $class->classname = $request->classname;
        $class->save();

        return view('adminpanel.create.tables.class');
    }
    public function class_edit($id){
        $class = Group::find($id);
        // dd($class);
        return view('adminpanel.edit.class', compact('class'));
    }
     public function class_editpost(Request $request, $id){
        $class = Group::find($id);
        $class->classname=$request->classname;
        $class->update();
        return view('adminpanel.create.tables.class');
    }
    public function class_del($id){
        $brand= Group::find($id);
        $brand->delete();
        return redirect(route('dashboard.classtable'));
    }
    public function class_view($id){
        $class= Group::find($id);
        // dd($class);
        return view('adminpanel.view.class',compact('class'));
    }
}

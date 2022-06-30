<?php

namespace App\Http\Controllers;

use App\Models\Allotment;
use App\Models\Exam;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Room;
use Illuminate\Support\Facades\Mail;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // public function admin()
    // {
    //     return view('adminpanel.index');
    // }
    public function dashboard()
    {
        $room = Allotment::select('room_id')->distinct()->get();
        $exam = Allotment::select('exam_id')->distinct()->get();
        return view('adminpanel.dashboard',compact('room','exam'));
    }

public function dashboard_post(Request $request){

// dd($request->all());

   $allotment = Allotment::where('room_id',$request->room_id)->where('exam_id',$request->exam_id)->get();
//  dd($allotment);


    // return redirect(route('dashboard_post'),compact('allotment'));

     return view('allotmentlist.hall',compact('allotment'));

}

    public function addmore()
    {
        return view('adminpanel.addmore');
    }
    public function emails()
    {
        return view('adminpanel.emails');
    }
    public function order()
    {
        return view('adminpanel.order');
    }
    public function products()
    {
        return view('adminpanel.products');
    }
    public function task()
    {
        return view('adminpanel.task');
    }


    public function admin()
    {
        return view('Layout.layout');
    }


    public function classtable()
    {
        return view('adminpanel.create.tables.class');
    }
    public function classadd()
    {

        return view('adminpanel.create.forms.class');
    }


    public function subjecttable()
    {
        return view('adminpanel.create.tables.subject');
    }
    public function subjectadd()
    {

        return view('adminpanel.create.forms.subject');
    }


    public function studenttable()
    {
        return view('adminpanel.create.tables.student');
    }
    public function studentatt()
    {

        return view('adminpanel.create.forms.student');
    }


    public function examtable()
    {
        return view('adminpanel.create.tables.exam');
    }
    public function examadd()
    {

        return view('adminpanel.create.forms.exam');
    }


    public function allotmenttable()
    {

        // dd($roomtype);
        return view('adminpanel.create.tables.allotment');
    }
    public function allotmentadd()
    {
        $roomtype = Type::get();
        $exams =Exam::get();
        $class =Group::get();
        $student =Student::select('id','sfname')->whereNotIn('student_id',DB::table('allotments')->where('student_id', 'id')->pluck('student_id')->toArray())->get();
        $data =Allotment::select('student_id','exam_id')->whereNotIn('student_id', DB::table('students')->select('id')->where('id','=', 'student_id')->get()->pluck('id'))->get();
        dd($student);


        return view('adminpanel.create.forms.allotment')->with(['roomtype'=> $roomtype,'exams'=> $exams,'class'=>$class,'student'=>$student]);
    }

    public function teachertable()
    {
        return view('adminpanel.create.tables.teacher');
    }
    public function teacheradd()

    {


        return view('adminpanel.create.forms.teacher');
    }

    public function ordertable()
    {
        return view('adminpanel.order.order');
    }





    public function roomtype()
    {
        return view('adminpanel.create.tables.roomtype');
    }
    public function roomtypeadd()
    {
        return view('adminpanel.create.forms.roomtype');
    }


    public function room()
    {
        return view('adminpanel.create.tables.room');
    }
    public function roomadd()
    {

        return view('adminpanel.create.forms.room');
    }

    public function make_user($id){

        $student = Student::find($id);
        $data = [

            'email' => $student->semail,
            'name' =>$student->sfname,
            'title' => "Registration",
            'body' =>"Completed",


        ];
        Mail::send('loginandregister.registrationverification', $data, function($message)use($data) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);

        });

        $user = new User();
        $user->name=$student->sfname;
        $user->email=$student->semail;
        $user->password=Hash::make($student->semail);
        $user->role='student';
        $user->student_id=$student->id;
        $user->save();

        return 'successs';




        //dd($student->semail);

    }
    public function user()
    {

        $user = User::all();
        return view('adminpanel.create.tables.user',compact('user'));
    }
    public function user_del($id){
        $user= User::find($id);

        $user->delete();
        return redirect(route('dashboard.dashuser'));
    }

}

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seat";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>
@extends('Layout.layout')
@section('contant')

    <div class="container-fluid">

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add Allotment</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="">
                    <div class="control-group">
                        <label class="control-label">Select Subject </label>
                        <div class="controls">
                            <select name="subject_id" style="width: 400px;" class="form-control" >
                                @foreach (\App\Models\Subject::all() as $subject)
                                <option value="{{$subject->id}}">{{$subject->subjectname}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Class </label>
                        <div class="controls">
                            <select name="group_id" style="width: 400px;" class="form-control" >
                                @foreach ($class as $classes)
                                <option value="{{$classes->id}}">{{$classes->classname}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Exam </label>
                        <div class="controls">
                            <select name="group_id" style="width: 400px;" class="form-control" >
                                @foreach ($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->name}}</option>
                            @endforeach
                            <input type="text">
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Exam </label>
                        <div class="controls">
                            <select name="group_id" style="width: 400px;" class="form-control" >
                                <option value="">--Select One--</option>
                                @foreach ($roomtype as $type)
                                <option value="{{$type->id}}">{{$type->roomname}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Exam </label>
                        <div class="controls">
                            <select name="group_id" style="width: 400px;" class="form-control" >
                                <option value="">--Select One--</option>
                                @foreach ($student as $students)
                                <option value="{{$type->id}}">{{$type->roomname}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Allocate Student</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection


@extends('Layout.layout')
@section('contant')
    <div class="container-fluid">

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New Student</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <label class="control-label">Select Class </label>
                        <div class="controls">
                            <select name="group_id" style="width: 400px;" class="form-control" >

                                @foreach (\App\Models\Group::all() as $class)
                                <option value="{{$class->id}}">{{$class->classname}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
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
                        <label for="p_name" class="control-label">Roll Number</label>
                        <div class="controls">
                            <input type="text" name="rollnumber" id="p_name" class="form-control" value="{{$student->rollnumber}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">First Name</label>
                        <div class="controls">
                            <input type="text" name="sfname" id="p_name" class="form-control" value="{{$student->sfname}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="slname" id="p_name" class="form-control" value="{{$student->slname}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Email</label>
                        <div class="controls">
                            <input type="email" name="semail" id="p_name" class="form-control" value="{{$student->semail}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Gender</label>
                        <div class="controls">
                            <select name="sgender" id="" class="form-control" style="width: 400px;">>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Date of Birth</label>
                        <div class="controls">
                            <input type="date" name="sdob" id="p_name" class="form-control" value="{{$student->sdob}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Address</label>
                        <div class="controls">
                            <input type="text" name="saddress" id="p_name" class="form-control" value="{{$student->saddress}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Mobile Number</label>
                        <div class="controls">
                            <input type="number" name="scontact" id="p_name" class="form-control" value="{{$student->scontact}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Subject</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

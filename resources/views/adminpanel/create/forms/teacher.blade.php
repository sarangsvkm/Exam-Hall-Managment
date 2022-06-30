@extends('Layout.layout')
@section('contant')
    <div class="container-fluid">

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New Teacher</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                   @csrf
                    <div class="control-group">
                        <label class="control-label">Select Class </label>
                        <div class="controls">
                            <select name="class_id" style="width: 400px;" class="form-control" >
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
                    {{-- <div class="control-group">
                        <label for="p_name" class="control-label">Subject Name</label>
                        <div class="controls">
                            <input type="text" name="subjectname" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div> --}}
                    <div class="control-group">
                        <label for="p_name" class="control-label">First Name</label>
                        <div class="controls">
                            <input type="text" name="tfname" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="tlname" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Email</label>
                        <div class="controls">
                            <input type="temail" name="temail" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Gender</label>
                        <div class="controls">
                            <select name="tgender" id="" class="form-control" style="width: 400px;">>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Date of Birth</label>
                        <div class="controls">
                            <input type="date" name="tdob" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Address</label>
                        <div class="controls">
                            <input type="text" name="taddress" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Mobile Number</label>
                        <div class="controls">
                            <input type="number" name="tcontact" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Teacher</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

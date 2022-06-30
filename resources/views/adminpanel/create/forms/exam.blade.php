@extends('Layout.layout')
@section('contant')
    <div class="container-fluid">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New Exam</h5>
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
                    <div class="control-group">
                        <label for="p_name" class="control-label">Name Of Exam</label>
                        <div class="controls">
                            <input type="text" name="name" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Exam Date</label>
                        <div class="controls">
                            <input type="date" name="exam_date" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Start Time</label>
                        <div class="controls">
                            <input type="time" name="start_time" id="p_name" class="form-control" value="" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">End Time</label>
                        <div class="controls">
                            <input type="time" name="end_time" id="p_name" class="form-control" value="" title=""
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

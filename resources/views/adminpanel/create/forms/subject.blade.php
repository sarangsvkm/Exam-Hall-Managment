@extends('Layout.layout')
@section('contant')
    <div class="container-fluid">

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New Subject</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                  @csrf
                    <div class="control-group">
                        <label class="control-label">Select Class</label>
                        <div class="controls">
                            <select name="group_id" style="width: 415px;">
                                <option value="">Choose One</option>
                                @foreach (\App\Models\Group::all() as $subject)
                                    <option value="{{$subject->id}}">{{$subject->classname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Subject Name</label>
                        <div class="controls">
                            <input type="text" name="subjectname" id="p_name" class="form-control" value="" title=""
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

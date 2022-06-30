@extends('Layout.layout')
@section('contant')
<div class="container-fluid">

    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add New Subject</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="">
                <div class="control-group">
                    <label class="control-label">Class</label>
                    <div class="controls">
                        <input type="text" name="" id="p_name" class="form-control" disabled value="{{$subject->group->classname}}" title="" required="required" style="width: 400px;">
                    </div>
                </div>
                <div class="control-group">
                    <label for="p_name" class="control-label">Subject Name</label>
                    <div class="controls">
                        <input type="text" name="" id="p_name" class="form-control" disabled value="{{$subject->subjectname}}" title="" required="required" style="width: 400px;">
                        <span class="text-danger"></span>
                    </div>
                </div>

                <div class="control-group">
                    <label for="" class="control-label"></label>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection


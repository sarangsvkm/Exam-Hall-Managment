@extends('Layout.layout')
@section('contant')
<div class="container-fluid">

    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>class</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
                <div class="control-group">
                    <label for="p_name" class="control-label">Name</label>


                    <div class="controls">
                        <input type="text" name="classname" id="p_name" class="form-control" value="{{$class->classname}}" title="" required="required" style="width: 400px;">
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-label"></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Update Class</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


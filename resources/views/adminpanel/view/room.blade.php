@extends('Layout.layout')
@section('contant')
    <div class="container-fluid">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New Room</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="">
                    <div class="control-group">
                        <label for="p_name" class="control-label">Name</label>
                        <div class="controls">
                            <input type="text" name="name" id="p_name" disabled class="form-control" value="{{$room->name}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Strenght</label>
                        <div class="controls">
                            <input type="text" name="strenght" id="p_name" disabled class="form-control" value="{{$room->strenght}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Room Type</label>
                        <div class="controls">
                            <input type="text" name="type_id" id="p_name" disabled class="form-control" value="{{$room->type->roomname}}" title=""
                                required="required" style="width: 400px;">
                            <span class="text-danger"></span>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection

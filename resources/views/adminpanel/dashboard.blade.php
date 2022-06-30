
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard Details</title>
</head>
@extends('Layout.layout')
@section('contant')


<body>
    <form action="{{route('dashboard.alldashboard_post')}}" method="post">
        @csrf

    <div class="container">
        <h2 style="text-align: center; color:  rgb(109, 224, 57); margin-top: 10px;">Allotments</h2>
        <div class="row">
            <div class="col-7">
                <select name="room_id"  class="form-select" aria-label="Default select example" style="margin-top: 40px; width: 20rem; display: flex; float: right;">
                    <option selected disabled>Select Room</option>
                    @foreach ($room as $item)

                  <option value="{{$item->room_id}}">{{$item->room->name}}</option>
                    @endforeach
                  </select>
            </div>

        </div>
        <div class="row">
            <div class="col-7">
                <select name="exam_id"  class="form-select" aria-label="Default select example" style="margin-top: 40px; width: 20rem; display: flex; float: right;">
                    <option selected disabled>Select Exam</option>
                    @foreach ($exam as $item)
                    <option value="{{$item->exam_id}}">{{$item->exam->name}}</option>
                    @endforeach
                  </select>
            </div>

        </div>
        <div class="col-5">

<button type="submit" class="btn btn-success" style="background-color:rgb(109, 224, 57) ; margin-top: 40px; ">Submit</button>
         </div>

    </div>
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
@endsection

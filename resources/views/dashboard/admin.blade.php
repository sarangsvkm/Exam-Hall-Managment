@extends('Layout.layout')
@section('contant')
<body>
        <div class="row" style="display: flex; margin-top: 50px; ">
        <div class="col-4" style="display: flex; justify-content: center;">
            <div class="card text-white  mb-3" style=" height: 8rem; width: 18rem;  background-color: #166cb9; ">
                <div class="card-body" style="text-align: center;">
                    <h1 style="font-size: 50px;">{{$user}}</h1>
                    <h4 class="card-title" >User</h4>

                </div>
            </div>
        </div>
        <div class="col-4" style="display: flex; justify-content: center;">
            <div class="card text-white  mb-3" style="width: 18rem; height: 8rem; background-color: #166cb9; ">
                <div class="card-body"  style="text-align: center;">
                    <h1 style="text-align: center; font-size: 50px;">{{$exam}}</h1>
                    <h4 class="card-title">Exam</h4>

                </div>
            </div>
        </div>
        <div class="col-4" style="display: flex; justify-content: center;">
            <div class="card text-white  mb-3" style="width: 18rem; height: 8rem; background-color: #166cb9;  ">
                <div class="card-body"  style="text-align: center;">
                    <h1 style="font-size: 50px;">{{$room}}</h1>
                    <h4 class="card-title">Room</h4>

                </div>
            </div>
        </div>
    </div>

    <div class="row" style="display: flex;">
        <div class="col-4" style="display: flex; justify-content: center;">
            <div class="card text-white  mb-3" style="width: 18rem; height: 8rem; background-color: #166cb9; ">
                <div class="card-body"  style="text-align: center;">
                    <h1 style="font-size: 50px;">{{$student}}</h1>
                    <h4 class="card-title">Student</h4>

                </div>
            </div>
        </div>
        <div class="col-4" style="display: flex; justify-content: center;">
            <div class="card text-white mb-3" style="width: 18rem; height: 8rem; background-color: #166cb9;  ">
                <div class="card-body"  style="text-align: center;">
                    <h1 style="font-size: 50px;">{{$subject}}</h1>
                    <h4 class="card-title">Subject</h4>

                </div>
            </div>
        </div>
        <div class="col-4" style="display: flex; justify-content: center;">
            <div class="card text-white  mb-3" style="width: 18rem; height: 8rem; background-color: #166cb9; ">
                <div class="card-body"  style="text-align: center;">
                    <h1 style="font-size: 50px;">{{$teacher}}</h1>
                    <h4 class="card-title">Teacher</h4>

                </div>
            </div>
        </div>
    </div>


    <div class="row" style="text-align: center;">
        <div class="col-12"  style="display: flex; justify-content: center;">
            <div class="third" style="display: flex;">

                <div class="card text-white  mb-3" style="width: 18rem; height: 8rem; background-color: #166cb9; ">
                    <div class="card-body"  style="text-align: center;">
                        <h1 style="font-size: 50px;">{{$class}}</h1>
                        <h4 class="card-title">Class</h4>

                    </div>
                </div>
            </div>
        </div>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
@endsection

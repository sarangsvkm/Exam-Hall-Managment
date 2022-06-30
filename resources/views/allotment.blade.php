{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body {
        display: flex;
        justify-content: center;
    }

    .one {
        margin-top: 70px;
        {{--  border: 3px solid rgb(0, 0, 0);
        border-radius: 0.45rem;
        background-color: #ededfd;
        padding: 40px;
    }

    .heading {
        text-align: center;
        padding-bottom: 20px;
        font-weight: 700;
    }

    form {
        width: 290px;
    }
</style>

<body> --}}
@extends('Layout.layout')
@section('contant')
    <div class="one" style="padding-left: 20px">

        <form action="" method="POST">
            @csrf

            @if (session()->get('allotment') == 'roomtype')
                <h5 class="heading">ROOM TYPE</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="roomtype" class="form-control" style="width: 400px;">
                            <option>Select Room Type</option>
                            @foreach (App\Models\Type::all() as $types)
                                <option value="{{ $types->id }}">{{ $types->roomname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h5 class="heading">EXAMS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="exam" class="form-control" style="width: 400px;">
                            <option>Select Exam Type</option>
                            @foreach (App\Models\Exam::all() as $exams)
                                <option value="{{ $exams->id }}">{{ $exams->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h5 class="heading">SUBJECTS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="subject" class="form-control" style="width: 400px;">
                            <option>Select Subject name</option>
                            @foreach (App\Models\Subject::all() as $subjects)
                                <option value="{{ $subjects->id }}">{{ $subjects->subjectname }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            @endif

            {{-- Hall --}}
            @if (session()->get('allotment') == 'Hall')
                <h5 class="heading">HALL</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="room_id" class="form-control">
                            <option>Select Room Type</option>
                            @foreach ($room as $rooms)
                                <option value="{{ $rooms->id }}">{{ $rooms->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h5 class="heading">STUDENTS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>

                    <div class="col-sm-5">
                        <label for="">The below students has been alloted to Hall:</label>
                        <ol>
                            @foreach ($student->take(10) as $students)
                                <li>
                                    <input type="checkbox" name="student[]" value="{{ $students->id }}" checked>
                                    <label for="checkbox">{{ $students->sfname }}</label>
                                    <input type="hidden" value="{{ session()->get('group_id') }}" name="group_id[]">
                                    <input type="hidden" value="{{ session()->get('subject_id') }}" name="subject_id[]">
                                    <input type="hidden" value="{{ session()->get('exam_id') }}" name="exam_id[]">
                                    <input type="hidden" value="{{ session()->get('type_id') }}" name="type_id[]">

                                    <input type="hidden" value="{{ session()->get('exam_date') }}" name="exam_date[]"
                                        id="">
                                    <input type="hidden" value="{{ session()->get('start_time') }}" name="start_time[]">
                                    <input type="hidden" value="{{ session()->get('end_time') }}" name="end_time[]">
                                    {{-- <input type="hidden" value="{{session()->get('room_id')}}" name="room_id[]"> --}}
                                    <input type="hiddem" value="{{ $students->rollnumber }}" name="rollnumber[]" id="">
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="col-sm-5">
                        <label for="">Student List</label>
                        <ol>
                            @foreach ($student as $students)
                                <li>
                                    <label for="">{{ $students->sfname }}</label>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                </div>
            @endif

            {{-- Lab --}}
            @if (session()->get('allotment') == 'Lab')
                <h5 class="heading">LAB</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Room Name</label>
                    <div class="col-sm-10">
                        <select name="room_id" class="form-control">
                            <option>Select Room Type</option>
                            @foreach ($room as $rooms)
                                <option value="{{ $rooms->id }}">{{ $rooms->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <h5 class="heading">STUDENTS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>

                    <div class="col-sm-5">
                        {{-- <select name="student" class="form-control">
                            <option>Select Student Type</option>
                            @foreach ($student as $students)
                                <option value="{{$students->id}}">{{$students->sfname}}...{{$students->sfname}}</option>
                            @endforeach
                        </select> --}}

                        {{-- @foreach ($student as $students)
                            <label for="">{{$students->sfname}}</label>
                            <input type="checkbox" class="form-check-input">
                        @endforeach --}}
                        <label for="">The below students has been alloted to Lab:</label>
                        <ol>
                            @foreach ($student->take(10) as $students)
                                <li>
                                    <input type="checkbox" name="student[]" value="{{ $students->id }}" checked>
                                    <label for="checkbox">{{ $students->sfname }}</label>
                                    <input type="hidden" value="{{ session()->get('group_id') }}" name="group_id[]">
                                    <input type="hidden" value="{{ session()->get('subject_id') }}" name="subject_id[]">
                                    <input type="hidden" value="{{ session()->get('exam_id') }}" name="exam_id[]">
                                    <input type="hidden" value="{{ session()->get('type_id') }}" name="type_id[]">

                                    <input type="hidden" value="{{ session()->get('exam_date') }}" name="exam_date[]"
                                        id="">
                                    <input type="hidden" value="{{ session()->get('start_time') }}" name="start_time[]">
                                    <input type="hidden" value="{{ session()->get('end_time') }}" name="end_time[]">
                                    {{-- <input type="hidden" value="{{session()->get('room_id')}}" name="room_id[]"> --}}
                                    <input type="hiddem" value="{{ $students->rollnumber }}" name="rollnumber[]" id="">
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="col-sm-5">
                        <label for="">Student List</label>
                        <ol>
                            @foreach ($student as $students)
                                <li>
                                    <label for="">{{ $students->sfname }}</label>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                </div>
            @endif

            {{-- Classroom --}}
            @if (session()->get('allotment') == 'Classroom')
                <h5 class="heading">CLASSROOM</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="room_id" class="form-control">
                            <option>Select Room Type</option>
                            @foreach ($room as $rooms)
                                <option value="{{ $rooms->id }}">{{ $rooms->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h5 class="heading">STUDENTS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>

                    <div class="col-sm-5">
                        <label for="">The below students has been alloted to Hall:</label>
                        <ol>
                            @foreach ($student->take(10) as $students)
                                <li>
                                    <input type="checkbox" name="student[]" value="{{ $students->id }}" checked>
                                    <label for="checkbox">{{ $students->sfname }}</label>
                                    <input type="hidden" value="{{ session()->get('group_id') }}" name="group_id[]">
                                    <input type="hidden" value="{{ session()->get('subject_id') }}" name="subject_id[]">
                                    <input type="hidden" value="{{ session()->get('exam_id') }}" name="exam_id[]">
                                    <input type="hidden" value="{{ session()->get('type_id') }}" name="type_id[]">

                                    <input type="hidden" value="{{ session()->get('exam_date') }}" name="exam_date[]"
                                        id="">
                                    <input type="hidden" value="{{ session()->get('start_time') }}" name="start_time[]">
                                    <input type="hidden" value="{{ session()->get('end_time') }}" name="end_time[]">
                                    {{-- <input type="hidden" value="{{session()->get('room_id')}}" name="room_id[]"> --}}
                                    <input type="hiddem" value="{{ $students->rollnumber }}" name="rollnumber[]" id="">
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="col-sm-5">
                        <label for="">Student List</label>
                        <ol>
                            @foreach ($student as $students)
                                <li>
                                    <label for="">{{ $students->sfname }}</label>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                </div>
            @endif

            {{-- Auditorium --}}
            @if (session()->get('allotment') == 'Auditorium')
                <h5 class="heading">AUDITORIUM</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="room_id" class="form-control">
                            <option>Select Room Type</option>
                            @foreach ($room as $rooms)
                                <option value="{{ $rooms->id }}">{{ $rooms->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h5 class="heading">STUDENTS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>

                    <div class="col-sm-5">
                        {{-- <select name="student" class="form-control">
                            <option>Select Student Type</option>
                            @foreach ($student as $students)
                                <option value="{{$students->id}}">{{$students->sfname}}...{{$students->sfname}}</option>
                            @endforeach
                        </select> --}}

                        {{-- @foreach ($student as $students)
                            <label for="">{{$students->sfname}}</label>
                            <input type="checkbox" class="form-check-input">
                        @endforeach --}}
                        <label for="">The below students has been alloted to Lab:</label>
                        <ol>
                            @foreach ($student->take(10) as $students)
                                <li>
                                    <input type="checkbox" name="student[]" value="{{ $students->id }}" checked>
                                    <label for="checkbox">{{ $students->sfname }}</label>
                                    <input type="hidden" value="{{ session()->get('group_id') }}" name="group_id[]">
                                    <input type="hidden" value="{{ session()->get('subject_id') }}" name="subject_id[]">
                                    <input type="hidden" value="{{ session()->get('exam_id') }}" name="exam_id[]">
                                    <input type="hidden" value="{{ session()->get('type_id') }}" name="type_id[]">

                                    <input type="hidden" value="{{ session()->get('exam_date') }}" name="exam_date[]"
                                        id="">
                                    <input type="hidden" value="{{ session()->get('start_time') }}" name="start_time[]">
                                    <input type="hidden" value="{{ session()->get('end_time') }}" name="end_time[]">
                                    {{-- <input type="hidden" value="{{session()->get('room_id')}}" name="room_id[]"> --}}
                                    <input type="hiddem" value="{{ $students->rollnumber }}" name="rollnumber[]" id="">
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="col-sm-5">
                        <label for="">Student List</label>
                        <ol>
                            @foreach ($student as $students)
                                <li>
                                    <label for="">{{ $students->sfname }}</label>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                </div>
            @endif


            {{-- SAMPLE CODE FOR ROOM --}}
            @if (session()->get('allotment') == 'room')
                <h5 class="heading">ROOMS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <select name="room" class="form-control" style="width: 400px;">
                            <option>Select Room Name</option>
                            @foreach ($room as $rooms)
                                <option value="{{ $rooms->id }}">{{ $rooms->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h5 class="heading">STUDENTS</h5>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        {{-- <select name="student" class="form-control" style="width: 400px;" >
                            <option>Select Student</option>
                            @foreach ($student as $students)
                                <option value="{{$students->id}}">{{$students->sfname}}...{{$students->id}}</option>
                            @endforeach
                        </select> --}}
                        @foreach ($student as $students)
                            <label for="">{{ $students->sfname }}</label>
                            <input type="checkbox">
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="row px-2">
                <button class="btn btn-secondary" type="submit">SUBMIT</button>
            </div>

        </form>



    </div>
@endsection

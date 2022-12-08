<?php $i = 0 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>


    </style>
    <title>Document</title>
</head>

<body>
    <div class="container" style="display: flex; justify-content: center;">
        <div style="border: 2px solid #6DE039; text-align: center; margin-top: 50px; width: 700px;" >
            <img src="https://www.schoolcraft.edu/admissions/wp-content/uploads/sites/2/2021/06/persona-first-year.png" alt="" style="margin-top: 50px; border-radius: 50%;" >
            <h4 style="margin-top: 20px;"> Name:{{Auth::user()->name}} </h4>
            <h4>Class: </h4>
            <h4>Batch: </h4>
            <h4>Alloted Exams: </h4>

       </div>
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">SL No</th>
            <th scope="col">Exam</th>
            <th scope="col">Subject</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allotment as $item)


          <tr>
            <th scope="row"><?php echo ++$i;?></th>
            <td>{{$item->exam->name}}</td>
            <td>{{$item->subject->subjectname}}</td>
            <td>{{$item->exam_date}}</td>
            <td>{{$item->start_time}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

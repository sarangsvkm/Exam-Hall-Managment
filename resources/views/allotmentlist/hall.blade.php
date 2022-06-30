<?php $i = 0 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASS</title>
    <style>
        html,
        body {

            background-color: #CBD5E6;
        }

        table,
        th,
        thead,
        tbody,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>

<body>
    <div class="top">
        <h2 style="text-align: center;">Class</h2>

    </div>



    <table style="width: 100%;">
        <thead>
            <tr>
                <th>Seat Number</th>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Room Number</th>

            </tr>
        </thead>
        <tbody>
 @foreach ($allotment as $item)
            <tr>
                <td>A <?php echo ++$i;?> </td>
                <td>{{$item->student->sfname}}</td>
                <td>{{$item->rollnumber}}</td>
                <td>{{$item->room->name}}</td>


            </tr>

            @endforeach




        </tbody>
    </table>


</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
       @import url(https://fonts.googleapis.com/css?family=Roboto);
body {
  /* background-color: #333; */
  color: #fff;
  font-family: "Roboto", Arial;
  padding: 2em;
  background-image: url("/g1.jpg");
  background-size: cover;
  background-repeat: no-repeat;

}
h1{
  font-family: "Roboto", Arial;

}

.flex-grid-center {
  display: flex;
  justify-content: end;
  margin: -7em 0;
}

.fuller-button {
  color: white;
  background: none;
  border-radius: 0;
  padding: 1.2em 5em;
  letter-spacing: 0.35em;
  font-size: 0.7em;
  transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
  margin: 1em;

}
.fuller-button.blue {
  box-shadow: inset 0 0 1em rgba(0, 170, 170, 0.5), 0 0 1em rgba(0, 170, 170, 0.5);
  border: #0dd solid 2px;
}
.fuller-button.blue:hover {
  background-color: #0dd;
  box-shadow: inset 0 0 0 rgba(0, 170, 170, 0.5), 0 0 1.5em rgba(0, 170, 170, 0.7);
}

.fuller-button.white {
  box-shadow: inset 0 0 0.8em rgba(255, 255, 255, 0.3), 0 0 0.8em rgba(255, 255, 255, 0.3);
  border: #fff solid 2px;
}
.fuller-button.white:hover {
  color: rgba(0, 0, 0, 0.8);
  background-color: #fff;
  box-shadow: inset 0 0 0 rgba(255, 255, 255, 0.3), 0 0 1.2em rgba(255, 255, 255, 0.5);
}

   </style>

</head>
<body>
    <h1>EXAM CELL MANAGEMENT. <hr> </h1>
    <div class="flex-grid-center">
        <a href="{{route('login')}}" style="color: white; text-decoration:none">
        <div class="pure-button fuller-button blue"> LOGIN  </div>
    </a>
    <a href="{{route('register')}}" style="color: white; text-decoration:none">
        <div class="pure-button fuller-button white" >REGISTER</div>
    </a>
      </div>

</body>
</html>

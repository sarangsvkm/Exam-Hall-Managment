<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('loginandreg/login.css')}}">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

          <h2 class="active"> Enter Email </h2>



          <div class="fadeIn first">
            <img src="assets/img/logo/logo.png" id="icon" alt="User Icon" />
          </div>


          <form action="" method="POST">
              @csrf
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>

          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>

        </div>
      </div>
</body>
</html>

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
          <!-- Tabs Titles -->
          <h2 class="active"> Reset Password </h2>


          <!-- Login Form -->
          <form action="" method="POST">
              @csrf

            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
            @if ($errors->has('password'))
            <p style="color: red">{{$errors->first('password')}}</p>
    @endif
            <input type="password" id="password" class="fadeIn third" name="confirm" placeholder="Confirm Password">
            @if ($errors->has('confirm'))
            <p style="color: red">{{$errors->first('confirm')}}</p>
    @endif
            <input type="submit" class="fadeIn fourth" value="Reset Password">
          </form>

        </div>
      </div>
</body>
</html>

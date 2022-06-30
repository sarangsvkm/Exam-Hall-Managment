{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('dashassets/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->



          <!-- Icon -->

          <h3 class="active">Registration</h3>

          <!-- Login Form -->
          <form action="" method="POST">
              @csrf
            <input type="text" id="login" class="fadeIn second" name="name" placeholder="Name">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="hidden" name="role" value="admin" id="">
        <select name="role" id="">
            <option value="admin">admin</option>
            <option value="student">student</option>
        </select>

            <input type="submit" class="fadeIn fourth" value="Register User">
          </form>



        </div>
      </div>
</body>
</html> --}}

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
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }

    </style>
    <title>Registration form</title>
</head>

<body>
    <section class="vh-200 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="" method="POST">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase">Admin Register</h2>


                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="name" class="form-control form-control-lg" name="name" value="{{old('name')}}" placeholder="Enter your name" />
                                        <label class="form-label" for="typename">Name</label>
                                        @if ($errors->has('name'))
                                            <p style="color: red">{{$errors->first('name')}}</p>
                                        @endif
                                    </div>


                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" value="{{old('email')}}" placeholder="Enter your email" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        @if ($errors->has('email'))

                                            <p style="color: red">{{$errors->first('email')}}</p>

                                        @endif
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg"
                                            name="password" placeholder="Password">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        @if ($errors->has('password'))

                                            <p style="color: red">{{$errors->first('password')}}</p>

                                        @endif
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg"
                                            name="confirm" placeholder="Password">
                                        <label class="form-label" for="typePasswordX">Confirm Password</label>
                                        @if ($errors->has('confirm'))
                                            <p style="color: red">{{ $errors->first('confirm') }}</p>


                                        @endif
                                    </div>



                                {{--
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="confirm" placeholder="Confirm your password" />
                                        <label class="form-label" for="typePasswordX">Confirm Password</label>
                                    </div> --}}

                                    <div class="form-outline form-white mb-4">
                                        <input type="hidden" id="name" class="form-control form-control-lg" name="role" placeholder="Admin" readonly value="admin" />
                                        <label class="form-label" for="typename">Role Admin</label>
                                    </div>



                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

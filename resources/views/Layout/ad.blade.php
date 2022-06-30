<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('dashassets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/css/Collapsible-Sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/css/Account-setting-or-edit-profile.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/css/addmore/addmore.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/table/css/style.css')}}">


</head>
<body>

    @include('Layout.sidebar')
    @include('Layout.header')
    @yield('contant')
    @include('Layout.footer')

    <script>
    $("a").on("click", function() {
        $("a").removeClass("active");
        $(this).addClass("active");
      });


      </script>
    <script src="{{asset('dashassets/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashassets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashassets/js/Collapsible-Sidebar.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

</body>
</html>

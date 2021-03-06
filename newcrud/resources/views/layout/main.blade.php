
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/mds5/https://use.fontawesome.com/releases/v5.15.2/css/all.css')}}" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('public/mds5/css/mdb.min.css')}}" />
  </head>
  <body>
    <header>
  <!-- Navbar -->
  
  @include('layout.navbar')

  @yield('content')

  @include('layout.footer')
  <!-- Navbar -->

</header>
    <!-- Start your project here-->
  
    <!-- End your project here-->


    <!-- MDB -->
    <script type="text/javascript" src="{{asset('public/mds5/js/mdb.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>

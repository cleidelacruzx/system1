<!DOCTYPE html>
<html>

<head>
  @include('partials._head')
</head>

<body>
  @include('partials._nav')

    <div class="container"> <!-- Page content -->
            @yield('content')
          <!-- <div class="loader"></div> -->
    </div> <!-- Page content --> 

  </div>  
  
  @include('partials._script')

</body>

</html>
<!DOCTYPE html>
<html>

<head>
  @include('partials._head')
</head>

<body>
  @include('partials._nav')

    <div class="container"> <!-- Page content -->
      <div class="row mt-2">
            @yield('content')
            <div class="loader"></div>
      </div>
    </div> <!-- Page content -->

  </div> <!-- Main content -->  
  
  @include('partials._script')

</body>

</html>
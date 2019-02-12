    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ticketing System</title>    
    
    <link href="/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/select2/dist/css/select2.css" rel="stylesheet">
    <link href="/argon-design/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link href="/DataTables/Data/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/nucleo/css/nucleo.css" rel="stylesheet">

    <style>
        .pace {
          -webkit-pointer-events: none;
          pointer-events: none;

          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        .pace-inactive {
          display: none;
        }

        .pace .pace-progress {
          background: red;
          position: fixed;
          z-index: 2000;
          top: 0;
          right: 100%;
          width: 100%;
          height: 2px;
        }

        /*Loading Icon*/
/*        .loader {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url('/Gear-1s-95px.gif') 50% 50% no-repeat rgb(249,249,249);
          opacity: .8;
        }*/
    </style>
    @yield('stylesheets')
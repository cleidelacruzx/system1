
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Ticketing system</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Google Tag Manager -->
 <!-- End Google Tag Manager -->
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.min.css?v=1.0.0" rel="stylesheet">
  <link href="/toastr/build/toastr.min.css" rel="stylesheet">
</head>

<body class="bg-default">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
      <!-- this is where you put your ion for the hoome -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" >
               
                <span class="nav-link-inner--text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item" id="login">
              <a class="nav-link nav-link-icon" href="{{ route('login') }}" >
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <!-- Page content -->
<!DOCTYPE html>
<html>
<title>Ticketing System</title>
<head>
<meta charset="UTF-8">
<style type="text/css">


input[type=date] {
    display: inline-block;  
    width: 52%;
  margin: 8px 0;
  padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  box-sizing: border-box
    font-size: 15px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  border-radius:5px;
}
input[type=text] {
    display: inline-block;  
    width: 52%;
  margin: 8px 0;
  padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  box-sizing: border-box
    font-size: 15px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  border-radius:5px;
}
input[type=password] {
    display: inline-block;  
    width: 50%;
  margin: 8px 0;
  padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  box-sizing: border-box
    font-size: 15px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  border-radius:5px;
}
input[type=submit] {
    width: 30%;
    background-color: #00ace6;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
  background-color: #0E4D92;
}

input[type=date]:focus {
  width: 60%;
}
input[type=text]:focus {
  width: 60%;
}
input[type= password]:focus {
  width: 60%;
}

div.loginbox{
  position: absolute;
  top: 115%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 490px;
  padding: 40px;
  background-color:white;
  box-shadow: 0 15px 25px rgba(0,0,0,.5)
  border-radius:50px;
  border: 5px solid #00ace6;
}
.logo{
  width: 490px;
  height: 100px;
  bordr-radius:50%;
  overflow: hidden;
  position:absolute;
  top: calc(-130px/2);
  left:calc(10% - 53px);
}

.reg
{
  position: absolute;
  text-align: left;

}

.icon{
  padding: 12px;
  background: white;
  color: #00ace6;
  min-width: 50px;
  text-align: center;
}
.ticketnumber {
  border-collapse: collapse;
  border: 2px solid #00ace6;;
}
.ticket, .number {
  padding: 15px;
}
.ticket {
  background-color: #00ace6;
}
.number:hover {
  background-color: #0E4D92;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>


    <tr>
        <td>
            <div id="mainlevel">
            <center>
            <table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tbody><tr>
                <td>
                    <center>
                    <div id="mainarea">
                    <center>
                    <table width="100%" border="0" cellpadding="5" cellspacing="5">
                    <tbody><tr>
                        <td>
                            <div id="maindivarea">
                            <center>
                                <div id="statusbox">
                                    <font color="red" face="arial" size="+1">
                                    <b>
                                        
                                    </b>
                                </font>
                                </div>
                                <br>
                                
                                <div class="loginbox">

                                <img src="img/headerpic.png" class="logo">
                                <br>
                        
                        <center><h2 style="color:black">REPORT</h2></center>
                    <form action="{{ route('admin.store') }} method="POST"> 
                    @csrf                    
                    <i class="fa fa-calendar icon"></i><input type="date" id="theDate" name="theDate"><br>
                      <script>
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var year = date.getFullYear();

                        if (month < 10) month = "0" + month;
                        if (day < 10) day = "0" + day;

                        var today = year + "-" + month + "-" + day;


                        document.getElementById('theDate').value = today;
                      </script>
                    <i class="fa fa-puzzle-piece icon"></i><input type="text" id="eproblem" name="eproblem" placeholder="Enter Problem" required=""><br>
                    <i class="fa fa-puzzle-piece icon"></i><input type="text" id="bproblem" name="bproblem" placeholder="Before the problem" required=""><br>
                    
                    <div>
                        <div class="col-80">
                          <select id="receiver" name="receiver">
                            <option value="" selected disabled hidden>Choose a receiver</option>
                          <option value="australia">Francis Joseph Gamboa</option>
                          </select>
                        </div>
                        </div>
                        <br>
                    <i class="fa fa-envelope icon"></i><input type="text" id="email" name="email" placeholder="Email Address" required=""><br>
                    <table class="ticketnumber">
                      <tr>
                        <th id="ticket" name="ticket" class="ticket">Ticket Number:</th>
                        <th id="demo" class="number"></th>
                      </tr>
                    <script>
                      document.getElementById("demo").innerHTML =
                      Math.floor(Math.random() * 10000) + 9000;
                      document.getElementById('demo').innerHTML = getRndInteger(10111,99652)
                    </script>
                    </table>
                    <br>
                    <!-- <input name="accept" type="submit" onclick="saveData()" value="Submit" href="#"> -->
                        <input name="accept" type="submit" value="Submit">
@csrf
                    </form>


    <script src="../assets/js/argon.min.js?v=1.0.0"></script>
  <script src="/toastr/toastr.min.js"></script>

                    <script>
                    	 function saveData(){

      

      var concern = $('#theDate').val();
      var concern = $('#eproblem') .val();
      var concern = $('#bproblem') .val();
      var concern = $('#receiver') .val();
      var concern = $('#email').val();  
      var concern = $('#ticket').val(); 

          $.ajax({
            type: "POST",
            url : " {{ route('view.store') }}",
            data: $('#concern').serialize(),
            success:function(e){
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});

                    </script>
                </br>
                </div>
                
              </center>
            </td>
          </tr>
          </tbody></table>
          </center>
          </div>
          </div>
          </center>
        </td>
      </tr>
      </tbody></table>
      </center>
      </div>
    </td>
  </tr>
  </tbody></table>
  </center>
</body>
</html>                  

</body>

</html>
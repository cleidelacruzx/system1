
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

body { 
    background: white; 
    overflow-x:hidden;
}

.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #00ace6;
  overflow-x: hidden;
  padding-top: 20px;
}

.mcd-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  /*height: 100px;*/
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
}
    
/*sidebar background*/
.mcd-menu li a {
  display: block;
  text-decoration: none;
  padding: 12px 20px;
  color: white;
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
}

.mcd-menu li a strong {
    display: block;
    text-transform: uppercase;
}
.mcd-menu li a small {
    display: block;
    font-size: 10px;
}

.mcd-menu li:hover > a {
    color:black;
}

div.loginbox{
    position: absolute;
    top: 110%;
    left: 50%;
    
    transform: translate(-50%,-50%);
    width: 580px;
    padding: 39px;
    background-color:white;
    box-shadow: 0 15px 25px rgba(0,0,0,.5)
    border-radius:50px;
    border: 6px solid #00ace6;

}
.logo{
    width: 580px;
    height: 115px;
    bordr-radius:50%;
    overflow: hidden;
    position:absolute;
    top: calc(-130px/2);
    left:calc(8% - 52px);
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.col-25 {
  float: center;
  width: 40%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.collapsible {
  background-color:  #e6e6e6;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  border: 2px solid #ddd;
}

.active, .collapsible:hover {
  background-color: #cccccc;
}

.content {
  padding: 0 8px;
  display: none;
  overflow: hidden;
  background-color: #cccccc;
  width: 95%;
}

i {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  position: relative;
  float: right;
  
}
.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}


</style>
<body>

<form>
<script type="text/javascript">
    function showfield(name){
    if(name=='op1')document.getElementById('div1').innerHTML='';
    else document.getElementById('div1').innerHTML='';
    if(name=='sub1')document.getElementById('div').innerHTML='';
    else document.getElementById('div2').innerHTML='';
    
    }
</script>

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
                                <h2 style="color:black">FAQs</h2>
                                              <form action="/action_page.php">
                                              
                                              <div class="row">
                                                <div class="col-25">
                                                  
                                                </div>
                                                
                                                <div class="col-75">

                                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select id="category">
    <option value="">Select Category</option>

</select>

<select id="subcategory">
    <option value="">Select Sub Category</option>
</select>

<script type="text/javascript">
var categories = [
    {
       value: '1',
       name: 'Category 1',
       subCategories: [{
           value: '1.1',
           name: 'others'
       }, {
           value: '1.2',
           name: 'other'
       }]
    }, {
       value: '2',
       name: 'Category 2',
       subCategories: [{
           value: '2.1',
           name: 'another'
       }, {
           value: '2.2',
           name: 'another'
       }]
    }
];

var $categorySelect =  $("#category");
var $subCategorySelect =  $("#subcategory");

// populate categories with options
categories.forEach(function(category) {
    var $option = $('<option/>').attr('value', category.value).html(category.name);
    $categorySelect.append($option);
});

$categorySelect.on('change', function() {
    // clean subcategory select from older options
    $subCategorySelect.empty();
  
    // find selected category
    var selectedCategoryValue = $categorySelect.val();
    var category = categories.find(function(category) {
        return category.value == selectedCategoryValue;
    });
  
    // if category found - populate subcategory select
    if (category) {
        category.subCategories.forEach(function(subcategory) {
            
            // you can extract this line into separate function
            var $option = $('<option/>').attr('value', subcategory.value).html(subcategory.name);
            
            $subCategorySelect.append($option);
        });
    }
    
})
</script>
<center><p></p></center>
<button class="collapsible">Problem 1 <i class="down"></i></button>
<div class="content">
  <p>Solution.</p>
</div>
<button class="collapsible">Problem 2<i class="down"></i></button>
<div class="content">
  <p>Solution.</p>
</div>
<button class="collapsible">Problem 3<i class="down"></i></button>
<div class="content">
  <p>Solution.</p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-25">
                                                  <div id="div1"></div>
                                                </div>
                                                <div class="col-25">
                                                  <div id="div2"></div>
                                                </div>
                                              </form>
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
</form>
</body>
</html>                  

</body>

</html>
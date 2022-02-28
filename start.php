<!doctype html>
<style type="text/css">
      <?php 
include ('assets/dist/css/bootstrap.min.css');
?>
<?php 
if(!$verifyTick){
  $verifyTick="";
}
?>
<?php 

if(isset($_GET['username'])){
   $addPost = "?onclick=".$username."";
} else{
   $addPost = "";
}
?>
    </style>
<div id="main">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Wetroverse">
    <meta name="generator" content="Hugo 0.72.0">
   
  
    

    <!-- Bootstrap core CSS -->
<script defer src="font/js/all.js"></script>

    <style>
    a{
      text-decoration: none;
    }
    a:hover{
      text-decoration: none
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
       @media (min-width: 991px) {
        .menu-header {
          margin-left: 30px;
        }
      }
      .search-block{
        margin-right: 0px;
        float: left;
      }
      .search-header{
        border-radius: 2px;
        width: 300px;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        background-color: #f2f2f2;
        padding-left:30px; 
        border:none; 

      }

      .search-header-btn{
        border-radius: 0px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        background-color: #f2f2f2;
         border:none; 
      }
      @media (min-width: 991px) {
        .in-nav {
          max-width: 1300px;
        }
      }
      
    </style>
    <style type="text/css">
    .trend-spot{
      background-color: #ffffff;
      margin-top: 7px;
      margin-left: 10px;
      margin-right: 20px;
    }
    .trend-tag{
      color: #007bff;
      text-decoration: none;
    }
    .verify-tag{
      color: #007bff;
    }
    .follow-suggestion{
      text-decoration: none;
    }
    .trend-dropdown{

    }
  </style>
 
    <!-- Custom styles for this template -->
    <link href="style/index.css" rel="stylesheet">
  </head>
  <body class="bg-light" id="page-loader">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white border-bottom">
  <div class="container-fluid in-nav">
   <button class="navbar-toggler p-0 border-0" type="button">
     <a href="#" class="text-muted"><i class="fas fa-home"></i></a> 
    </button>
    <a class="navbar-brand text-center" href="#">Wetroverse</a>

  <button class="navbar-toggler p-0 border-0" type="button">
  <i class="far fa-envelope"></i>
    </button>
    <div class="navbar-collapse offcanvas-collapse menu-header" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-envelope"></i> HMU</a>
        </li>
      </ul>
      <form class="search-block d-flex" method="GET" action="search">
        <input class="search-header form-control shadow-sm" name="searchbox" type="search" placeholder="Search Wetroverse" aria-label="Search">
        <button class="btn btn-outline-secondary search-header-btn shadow-sm" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<div class="nav-scroller bg-white text-center border-bottom border-top header-profile" style="position: fixed; top:50px; width: 100%; z-index: 1020;"><center>
  <nav class="nav nav-underline text-white nav-pills" style="max-width: 600px;">
    <a class="nav-link" href="#"><b>Complete youe profile. &nbsp;&nbsp;&nbsp;&nbsp; <span class="font-weight-light">Skip</span></a>
  </nav>
  </center>
</div>
<br>
<style type="text/css">
  /* Hide scrollbar for Chrome, Safari and Opera */
.time::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.time {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
.time-img{
  border: 2px solid #795548;
  padding: 2px;
  border-radius: 100%;
}
.panel-menu{
  position: fixed;
}
.panel-menu-right{
  position: fixed;
  margin-left: 950px;

}
@media screen and (max-width: 1280px) {
  .panel-menu {
    position: all;
   left: -1000px;
  }
  }
  @media screen and (max-width: 1280px) {
  .panel-menu-right {
    position: all;
   right: -1000px;
  }
  }
  
</style>

 <title>Complete your · Wetroverse</title>



<main class="container" style="max-width: 600px; margin-top: 20px;">
     <form class="bg-white shadow-sm rounded pb-5 pl-3 pt-0 pr-3" style="width: 100%; ">
    
  <div class="row border-bottom">
    <p class="mt-2"><span class="font-weight-bold">Cover image</span> · <span class="font-weight-light">Tap image to edit</span></p>
    <div class="col-4">
    <img class="mb-3 shadow-sm" src="img/profile.png" alt="Wetroverse" height="80" style="width: 100%">
    </div>
   <div class="col-4">
    <img class="mb-3 shadow-sm" src="img/some.jpg" alt="Wetroverse" height="80" style="width: 100%">
    </div>
     <div class="col-4">
    <svg style=" width: 100%" class=" mb-3 shadow-sm bd-placeholder-img flex-shrink-0" height="80" xmlns="img/home.svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title>
      <rect width="100%" height="100%" fill="#999999"/><text x="50%" y="50%" fill="#ffffff" dy=".3em">+</text></svg>
    </div>
        </div>
            <p class="mt-2"><span class="font-weight-bold">Profile image</span> · <span class="font-weight-light">Tap image to edit</span></p>
    <img class="ml-2 mr-2 mb-3 shadow-sm  mt-1" src="img/ceo1.jpg" alt="Wetroverse" width="100" height="100" style="border-radius: 10px; padding: 2px; border:1px solid #cccccc;">
   <div class="border-bottom mb-2"></div>
    <p class="mt-2"><span class="font-weight-bold">General information</span></p>
        <input class="form-control text mb-3 border shadow-sm" type="text" placeholder="Fullname" aria-label="Search" style=" border:none;" value="Full name">
         <input class="form-control text mb-3 border  shadow-sm" type="text" placeholder="Username" aria-label="Search" style=" border:none;" value="Username">
            <input class="form-control text mb-3 border  shadow-sm" type="url" placeholder="Known as" aria-label="Search" style=" border:none;" value="Entrepenur">
              <input class="form-control text mb-3 border shadow-sm" type="url" placeholder="Website" aria-label="Search" style=" border:none;" value="Website">
              <textarea class="form-control text mb-3 border  shadow-sm" placeholder="About">Entrepeneur minds</textarea>
           <p class="mt-2"><span class="font-weight-bold">Personal information</span></p>
                <input class="form-control text mb-3 border shadow-sm" type="email" placeholder="Email" aria-label="Search" style=" border:none;" value="email">
                <input class="form-control text mb-3 border shadow-sm" type="tel" placeholder="Email" aria-label="Search" style=" border:none;" value="Phone number">
                <div class="row">
                   <label for="state" class="form-label">Date of Birth</label>
    <div class="col-4 mb-3">
     <select class="form-select shadow-sm" id="state" required>
     <option value="">Day</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     </select>
    </div>
     <div class="col-4 mb-3">
     <select class="form-select shadow-sm" id="state" required>
     <option value="">Month</option>
     <option>January</option>
     <option>Febuary</option>
     <option>March</option>
     <option>April</option>
     <option>May</option>
     <option>June</option>
     <option>July</option>
     <option>August</option>
     <option>September</option>
     <option>October</option>
     <option>November</option>
     <option>December</option>
     </select>
    </div>
    <div class="col-4 mb-3">
     <select class="form-select shadow-sm" id="state" required>
     <option value="">Year</option>
     <option>2007</option>
     <option>2006</option>
     <option>2005</option>
     </select>
    </div>
                </div>
                  <button type="reset" class="btn shadow-sm border mr-3 mt-3" style=" background-color: #ffffff; color: #222222;"><i class="fas fa-times"></i> Skip</button>  
                 <a href="load">  <button type="button" class="btn mr-3 shadow-sm border mt-3" style=" background-color: #673AB7; color: #ffffff;"><i class="fas fa-check"></i> Save changes</button>    
  </form>


</main>

<?php
include('footer.php');
?>

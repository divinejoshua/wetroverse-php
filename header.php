<!doctype html>
 <style type="text/css">
<?php 
include ('assets/dist/css/bootstrap.min.css');
?>
<?php 
if(!$hashclick){
  $hashclick="";
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
      
       @media (min-width: 1280px) {
        .nav-add-post {
        background-color:#fed136; 
        position: fixed;
         top: 0px; 
         margin-top: 1000px; 
         width: 100%; 
         height: 100px;

        }
      }
      .nav-add-post{
        position: fixed;
         bottom: 0px; 
         width: 100%; 
         height: 100px; 
         z-index: 1020;
      }
.btn-add-post{
  float: right;
   border-radius: 100%; 
   height: 60px;
    width: 60px; 
    background-color: #F44339;
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
      <a href="profile" class="text-muted"> <i class="fas fa-user-circle"></i> </a>
    </button>
    <a class="navbar-brand text-center" href="home">Wetroverse</a>

  <button class="navbar-toggler p-0 border-0" type="button">
  <i class="far fa-envelope"></i>
    </button>
    <div class="navbar-collapse offcanvas-collapse menu-header" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="profile"><i class="far fa-user-circle"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-envelope"></i> HMU</a>
        </li>
      </ul>
      <form class="search-block d-flex" action="search" method="GET">
        <input class="search-header form-control shadow-sm" type="search" name="searchbox" placeholder="Search Wetroverse" aria-label="Search">
        <button class="btn btn-outline-secondary search-header-btn shadow-sm" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<style type="text/css">
</style>
<div class="nav-scroller bg-white text-center border-bottom border-top shadow-sm" style="position: fixed; width: 100%; z-index: 1020;"><center>
  <nav class="nav nav-underline text-white nav-pills nav-justified" style="max-width: 600px;">

    <a class="nav-link pr-0 mr-3 <?php echo"$pageHome"; ?>" aria-current="page" href="home" style="background: #fff;"><i class="fas fa-home"></i> Home</a>

    <a class="nav-link pl-0 <?php echo"$pageFollowing"; ?>" href="following" style="background: #fff;"> <span class="text-danger">&#9679; </span> <i class="fas fa-user-check"></i> Following</a>
    <a class="nav-link m-0 pl-0 <?php echo"$pageDiscover"; ?>"  href="discover" style="background: #fff;"><i class="fas fa-search"></i> Discover</a>

    <a class="nav-link mr-3 pl-0 <?php echo"$pageNotification"; ?>" href="notification"style="background: #fff;"> <span class="text-danger">&#9679; </span> <i class="fas fa-bell"></i> Notification</a>
  </nav>
  </center>
</div>
<span class="nav-add-post ">
<div class="nav-scroller" style="height: 100px;"><center>
  <center style="max-width: 600px;">
<a href='addpost<?php echo"$hashclick"; ?>'><button type="button" class="nav-link btn btn-add-post react text-white mr-4 shadow" style=""><i class="fab fa-slack-hash" style="font-size: 23px;"></i></button> </a>
</center>
</div>
</span>
<br><br>
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
<div class="container" style="max-width: 1250px; padding: 0px;">
  
  <div class="panel-menu" style="width: 300px;">
    <div class="nav-scroller bg-white shadow-sm" style="height: auto; border-radius: 10px;">
     <div class="d-flex text-muted pr-3 pt-3 pl-3 mb-0">
     <img class="mr-2 mb-3 shadow-sm rounded" src="img/t1.jpg" alt="Wetroverse" width="40" height="40">
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i> </strong>@username
      </p>

    </div>
     <div class="d-flex border-bottom bg-white" style="border-radius: 0px; border:none;">
  <p class="p-0 mb-3 mt-0 small text-dark" style="padding: 0;margin-left: 20px;">
    <strong class="d-block text-muted">Followers <span class="font-weight-light" style="color: #999999;"></span></strong>200k
  </p>
   <p class="p-0 mb-3 mt-0 small text-dark" style="padding: 0;margin-left: 20px;">
    <strong class="d-block text-muted">Following <span class="font-weight-light" style="color: #999999;"></span></strong>1,900
  </p>
  </div>
    <p class="pb-3 mb-2 mt-2 mr-3 ml-3 small text-muted border-bottom">
   <span class=""><i class="fas fa-certificate"></i> Musician</span> &nbsp;&nbsp;&nbsp;
         <span class=""><i class="fas fa-map-marker-alt"></i> Lagos</span>
          <br><span class="">https://wetroverse.com/username</span>
      </p>
     <p class="pb-3 pt-0 pr-3 pl-3 mb-0 small text-dark border-bottom">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <span class="trend-tag">#SchoolReopen</span>
      </p>

</div>
<div class="d-flex">
<a type="button" class=" nav-link btn btn- default btn-block btn-lg btn-sm mt-3 mr-3 border" style="height: 40px;background-color: #ffffff"><i class="fas fa-video"></i> Go Live</button></a>
 <a href='addpost<?php echo"$hashclick"; ?>' type="button" class=" nav-link btn btn-primary btn-block btn-lg btn-sm mt-3 mr-3 border" style="height: 40px;"><i class="fas fa-edit"></i> Add post</a>
</div>
  </div>
 <div class="panel-menu" style="width: 300px; top:515px;">
    <div class="nav-scroller" style="height: auto;">
          <a href="edit" type="" class=" nav-link mt-2 mb-5 border-bottom text-muted" style="height: 40px;"><i class="fas fa-cog"></i> Settings <i class="fas fa-chevron-right mt-1"style="float: right;"></i></a>
    <p class="pb-3 pt-0 pr-3 pl-3 mb-0 small text-dark">
      About · Legal · Privacy · Safety · Feedback · API · Blog · Terms of use · Advertise
              <span class="trend-tag"><br>&copy; 2020. Wetroverse Inc.</span>
      </p>
</div>
  </div>



 
  <div class="panel-menu-right" style="width: 300px;">

     <div class="nav-scroller bg-white shadow-sm mb-4" style="height: auto; border-radius: 10px;">
     <div class="d-flex text-muted pr-0 pt-0 pl-0 mb-0">
     <svg class="bd-placeholder-img flex-shrink-0" style="width: 100%;" height="200" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#607D8B"/><text x="50%" y="50%" fill="#ffffff" dy=".3em">Video Ad</text></svg>

    </div>
      <div class="btn-group react-tool border-bottom pb-1" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
    <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
     <div class="d-flex text-muted pr-3 pl-3 pt-2 mb-0 pt-1">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#E91E63"/><text x="50%" y="50%" fill="#E91E63" dy=".3em">32x32</text></svg>

      <div class="pb-2 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
     <p class="pb-3 pt-2 pr-3 pl-3 mb-0 small text-dark border-top">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <span class="trend-tag">#SchoolReopen</span>
      </p>

</div>

 <p class="pl-4 pr-4" style="margin-top: -10px; margin-bottom: 10px;"><a href="suggestion" class="text-dark follow-suggestion mb-2"><b>All suggestions</b> <i class="fas fa-chevron-right" style="float: right;"></i> </a></p>
    <div class="nav-scroller bg-white shadow-sm pt-3" style="height: auto; border-radius: 10px;">
      <div class="d-flex text-muted pr-3 pl-3 pt- mb-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pr-3 pl-3 pt-0 mb-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#9C27B0"/><text x="50%" y="50%" fill="#9C27B0" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pr-3 pl-3 pt-0 mb-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#E91E63"/><text x="50%" y="50%" fill="#E91E63" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pr-3 pl-3 pt-0 mb-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#FF5722"/><text x="50%" y="50%" fill="#FF5722" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pr-3 pl-3 pt-0 mb-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#009688"/><text x="50%" y="50%" fill="#009688" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>

      </div>
    </div>

</div>
  </div>


    
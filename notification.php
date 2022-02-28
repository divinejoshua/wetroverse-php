<?php 
$pageHome = "";
$pageFollowing ="";
$pageDiscover = "";
$pageNotification ="active text-danger";
include ('header.php');
?>
<title>Notifications · Wetroverse</title>

<main class="container pl-0 pr-0 pb-0" id="mainContent" style="max-width: 600px; margin-top: 10px;">
  <style type="text/css">
    .trend-spot{
      background-color: #ffffff;
      margin-top: 7px;
      margin-left: 10px;
      margin-right: 20px;
    }
    .trend-tag{
      color: #007bff;
    }
    .verify-tag{
      color: #007bff;
    }
    .follow-suggestion{
      text-decoration: none;
    }

  </style>
  <style type="text/css" name="post">
    .postcard{
      border-radius: 15px;
    }
.active-border-bottom{
  border-bottom:2px solid #999999;
}
  </style>
  <div class="nav-scroller bg-white shadow" style="height: 81px;">
     <h6 class="trend-spot">Option</h6>
  <nav class="nav nav-underline text-white border-top">
    <a class="nav-link text-dark active-border-bottom" href="#">Top </a>
    <a class="nav-link text-dark" href="#">Popular <span class="badge bg-danger">+New</span></a>
  </nav>
</div>
 <style type="text/css">
 .react-tool{
          width:100%;
         } 
        
        </style>
        <div class="my-3 p-3 bg-white rounded shadow">
    <h6 class="border-bottom pb-2 mb-0 text-dark">Recent <span class="badge bg-secondary" style="float: right;">+400</span></h6>
      <div class="list  border-bottom">
    <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark"><i class="fas fa-user-plus text-muted"></i> Follow </strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er followed you</span>
      </div>
    </div>
  </div>
      <div class="list  border-bottom">
    <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark"><i class="fas fa-user-plus text-muted"></i> Follow </strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er followed you</span>
      </div>
    </div>
  </div>
    <div class="list  border-bottom">
     <img class="mr-3 mt-3 shadow rounded" style="float:right; right: 10px;" src="img/t4.jpg" alt="Wetroverse" width="40" height="40">
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark"><i class="fas fa-star text-muted"></i> Like</strong>
        </div>
        <span class="d-block follow-suggestion">@username liked your post</span>
      </div>
    </div>
  </div>
   <div class="list  border-bottom">
     <img class="mr-3 mt-3 shadow rounded" style="float:right; right: 10px;" src="img/t4.jpg" alt="Wetroverse" width="40" height="40">
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark"><i class="fas fa-retweet text-muted"></i> Repost</strong>
        </div>
        <span class="d-block follow-suggestion">@username reposted your post</span>
      </div>
    </div>
  </div>
 <div class="list  border-bottom">
     <img class="mr-3 mt-3 shadow rounded" style="float:right; right: 10px;" src="img/t3.jpg" alt="Wetroverse" width="40" height="40">
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark"><i class="fas fa-comment-dots text-muted"></i> Comment</strong>
        </div>
        <span class="d-block follow-suggestion">@username commented on your post</span>
      </div>
    </div>
  </div>
  <div class="list  border-bottom">
     <img class="mr-3 mt-3 shadow rounded" style="float:right; right: 10px;" src="img/t3.jpg" alt="Wetroverse" width="40" height="40">
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark"><i class="fas fa-share text-muted"></i> Share</strong>
        </div>
        <span class="d-block follow-suggestion">@username shared your post</span>
      </div>
    </div>
  </div>


    <small class="d-block text-right mt-3">
      <a href="discover" class="text-dark follow-suggestion">Discover &nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
    </small>
  </div>

  

</main>

<?php
include('footer.php');
?>


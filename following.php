<?php 
$pageHome = "";
$pageFollowing ="";
$pageDiscover = "";
$pageNotification ="";
$pageName="Following - @usernames"; 
include ('header-two.php');
?>
<title>Suggestion · Wetroverse</title>

<main class="container" id="mainContent" style="max-width: 600px; margin-top: 20px;">
  <div class="time nav-scroller d-flex align-items-center p-3 my-3 text-dark-50 bg-white rounded shadow" style="height: 40px;">
      <form class="d-flex" style="width: 100%;">
        <input class="form-control searchbox" type="search" placeholder="Search @usernamewwwwwww following" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn border-left" type="submit"><i class="fas fa-search"></i></button>
      </form>
  </div>
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

  </style>
 
 <style type="text/css">
 .react-tool{
          width:100%;
         } 
        
        </style>
        <div class="my-3 p-3 bg-white rounded shadow">
    <h6 class="border-bottom pb-3 mb-0 text-dark">Accounts 
    <button type="button"  class="btn btn-secondary-outline react text-muted p-0" data-toggle="dropdown" aria-expanded="false" style="float: right;">
   <i class="fas fa-ellipsis-v"></i>
  </button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none;">
   <li><a class="dropdown-item text-muted p-2 pl-3" href="#">Default</a></li>
    <li><a class="dropdown-item text-muted p-2 pl-3" href="javascript:void(0);">Earliest</a></li>
    <li><a class="dropdown-item text-muted p-2 pl-3" href="javascript:void(0);">Most recent</a></li>
  </ul>
  </h6>
    <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name </strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/ceo1.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
 <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name </strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/ceo1.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>

 <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-3 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="50" height="50">
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name </strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/ceo1.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
     <div class="d-flex text-muted pt-3">
     <img class="mr-3 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="50" height="50">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>

    <small class="d-block text-right mt-3">
      <a href="#" class="text-dark follow-suggestion">All accounts &nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
    </small>
  </div>

  

</main>

<?php
include('footer.php');
?>


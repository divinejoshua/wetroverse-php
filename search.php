<?php 
$pageHome = "";
$pageFollowing ="";
$pageDiscover = "";
$pageNotification ="";
if(isset($_GET['searchbox'])){
  $searchBox = $_GET['searchbox'];
}

$hashclick = "";


include ('header.php');
?>

<title>Search · Wetroverse</title>
<main class="container" id="mainContent" style="max-width: 600px; margin-top: 20px;">
  <div class="time nav-scroller d-flex align-items-center p-3 my-3 text-dark-50 bg-white rounded shadow" style="height: 40px;">
      <form class="d-flex" style="width: 100%;" method="GET" action="search">
        <input class="form-control searchbox" name="searchbox" type="search" placeholder="Search Wetroverse" aria-label="Search" style=" border:none;" value="<?php echo"$searchBox"; ?>">
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
    .active{
      background-color: none;
    }

  </style>
  <div class="nav-scroller bg-white shadow" style="height: 80px;">
     <h6 class="trend-spot">Option</h6>
  <nav class="nav nav-underline text-white border-top">
    <a class="nav-link text-dark active-border" href="#">Top</a>
    <a class="nav-link text-dark" href="#">Latest</a>
    <a class="nav-link text-dark" href="#">Account</a>
    <a class="nav-link text-dark" href="#">Photos</a>
    <a class="nav-link text-dark" href="#">Videos</a>
    <a class="nav-link text-dark" href="#">Shop</a>
  </nav>
</div>
 <style type="text/css">
 .react-tool{
          width:100%;
         } 
        
        </style>
        <div class="my-3 p-3 bg-white rounded shadow">
    <h6 class="border-bottom pb-2 mb-0 text-dark">Accounts</h6>
    <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="32" height="32">
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-2 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="32" height="32">

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

  <div class="my-3 p-3 pb-1 pt-1 shadow bg-white text-dark postcard">
     <button type="button" class="btn btn-secondary-outline react text-danger" style="float: right; margin-top:10px;"><i class="fas fa-ad"></i></button>
      <button type="button" class="btn btn-secondary-outline react btn-sm text-muted" style="float: right;  margin-top:10px; color:#555555; "><i class="fas fa-user-plus"></i> Follow</button>
    <div class="d-flex text-muted pt-3 mb-0">
     <img class="mr-2 mb-3 shadow-sm rounded" src="img/t1.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name</strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <span class="trend-tag">#SchoolReopen</span>
      </p>
       <a href="post"><img class="mr-3 mb-3 shadow-sm rounded border-bottom" src="img/ceo1.jpg" alt="Wetroverse" style="width: 100%"></a>
     <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><i class="fas fa-map-marker-alt"></i> Worldwide</small><small> &#124; 6:30 PM · 2 june, 2020</small></p>


        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
<div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
      <button type="button" class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"  data-toggle="modal" data-target="#share"><i class="fas fa-share"></i></button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none; margin-left: -50px;">
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-retweet"></i> Repost</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-edit"></i> Repost with comment</a></li>
  </ul>
  <div class="modal fade" id="share" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Share post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <ul class="list-group list-group-flush">
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-clock mr-1"></i> Share to Timeline</a>
   <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-envelope mr-1"></i> Share as message</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="fas fa-at mr-1"></i> Send as Email</a>
  <a href="javascript:void(0);" class="list-group-item text-muted"><i class="fas fa-link mr-1"></i> Copy link</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted" data-dismiss="modal"><i class="fas fa-times mr-1"></i> Close</a>
</ul>
      </div>
    </div>
  </div>
 </div>
</div>
  <p class="mb-1 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>
  <form class="d-flex" style="width: 100%;">
         <button class="btn searchbtn border-right" type="submit"><i class="fas fa-image text-muted"></i></button>
        <input class="form-control searchbox" type="text" placeholder="Add comment" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn border-left" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>
</div>



  <div class="my-3 p-3 pb-1 pt-1 shadow bg-white text-dark postcard">
<div class="btn-group dropleft" style="float: right; margin-top:10px;">
  <button type="button"  class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false">
   <i class="fas fa-ellipsis-v"></i>
  </button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none;">
   <li><a class="dropdown-item text-muted" href="#"> <i class="fas fa-user-plus"></i> Follow</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-user-circle"></i> View profile</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-link"></i> Copy link</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-bookmark"></i> save</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-flag"></i> Report post</a></li>
    <li><a class="dropdown-item text-danger" href="javascript:void(0);"> <i class="fas fa-ban"></i> Block</a></li>
  </ul>
</div>
   <div class="d-flex text-muted pt-3 mb-0">
     <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg> 
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        <span class="trend-tag">#SchoolReopen</span>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
      <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small> &#124; 6:30 PM · 2 june, 2020</small></p>

  <p class="mb-1 small ml-0 mr-0 pl-0 pb-0 text-grey-dark text-small" style="color:#777777;"></p>

<div class="repost pl-3 pr-3 mb-1 border rounded shadow-sm">
  <div class="btn-group dropleft" style="float: right; margin-top:10px;">
  <button type="button"  class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false">
   <i class="fas fa-ellipsis-v"></i>
  </button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none;">
   <li><a class="dropdown-item text-muted" href="#"> <i class="fas fa-user-plus"></i> Follow</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-user-circle"></i> View profile</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-link"></i> Copy link</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-bookmark"></i> save</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-flag"></i> Report post</a></li>
    <li><a class="dropdown-item text-danger" href="javascript:void(0);"> <i class="fas fa-ban"></i> Block</a></li>
  </ul>
</div><button type="button" class="btn btn-secondary-outline react btn-sm text-muted" style="float: right;  margin-top:10px; color:#555555; "><i class="fas fa-user-plus"></i> Follow</button>
    <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name</strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">#SchoolReopen</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</small><small> &#124; 6:30 PM · 2 june, 2020</small></p>
  </div>
        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
   <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
   <p class="mb-1 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>
  <form class="d-flex" style="width: 100%;">
         <button class="btn searchbtn border-right" type="submit"><i class="fas fa-image text-muted"></i></button>
        <input class="form-control searchbox" type="text" placeholder="Add comment" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn border-left" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>


  </div>

  <div class="my-3 p-3 bg-white rounded shadow">
    <h6 class="border-bottom pb-2 mb-0 text-dark">Suggestions</h6>
    <div class="d-flex text-muted pt-3 text-dark">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t3.jpg" alt="Wetroverse" width="32" height="32">
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>
          <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@divine.er</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
         <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
     <img class="mr-2 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="32" height="32">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-dark">Full Name</strong>
        <a href="#" class="text-muted follow-suggestion"><i class="fas fa-user-plus"></i> Follow</a>
        </div>
        <span class="d-block follow-suggestion">@username</span>
      </div>
    </div>
    <small class="d-block text-right mt-3">
      <a href="suggestion" class="text-dark follow-suggestion">All suggestions &nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
    </small>
  </div>

   <div class="my-3 p-3 pb-1 pt-1 shadow bg-white text-dark postcard">
     <button type="button" class="btn btn-secondary-outline react text-danger" style="float: right; margin-top:10px;"><i class="fas fa-ad"></i></button>
      <button type="button" class="btn btn-secondary-outline react btn-sm text-muted" style="float: right;  margin-top:10px; color:#555555; "><i class="fas fa-user-plus"></i> Follow</button>
    <div class="d-flex text-muted pt-3 mb-0">
     <img class="mr-2 mb-3 shadow-sm rounded" src="img/t1.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name</strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <span class="trend-tag">#SchoolReopen</span>
      </p>
       <a href="post"><img class="mr-3 mb-3 shadow-sm rounded border-bottom" src="img/pro.png" alt="Wetroverse" style="width: 100%"></a>
     <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><i class="fas fa-map-marker-alt"></i> Worldwide</small><small> &#124; 6:30 PM · 2 june, 2020</small></p>


        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
<div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
      <button type="button" class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"  data-toggle="modal" data-target="#share"><i class="fas fa-share"></i></button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none; margin-left: -50px;">
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-retweet"></i> Repost</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-edit"></i> Repost with comment</a></li>
  </ul>
  <div class="modal fade" id="share" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Share post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <ul class="list-group list-group-flush">
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-clock mr-1"></i> Share to Timeline</a>
   <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-envelope mr-1"></i> Share as message</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="fas fa-at mr-1"></i> Send as Email</a>
  <a href="javascript:void(0);" class="list-group-item text-muted"><i class="fas fa-link mr-1"></i> Copy link</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted" data-dismiss="modal"><i class="fas fa-times mr-1"></i> Close</a>
</ul>
      </div>
    </div>
  </div>
 </div>
</div>
  <p class="mb-1 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>
  <form class="d-flex" style="width: 100%;">
         <button class="btn searchbtn border-right" type="submit"><i class="fas fa-image text-muted"></i></button>
        <input class="form-control searchbox" type="text" placeholder="Add comment" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn border-left" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>
</div>


<div class="my-3 p-3 pb-1 pt-1 shadow bg-white text-dark postcard">
<div class="btn-group dropleft" style="float: right; margin-top:10px;">
  <button type="button"  class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false">
   <i class="fas fa-ellipsis-v"></i>
  </button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none;">
   <li><a class="dropdown-item text-muted" href="#"> <i class="fas fa-user-plus"></i> Follow</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-user-circle"></i> View profile</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-link"></i> Copy link</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-bookmark"></i> save</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-flag"></i> Report post</a></li>
    <li><a class="dropdown-item text-danger" href="javascript:void(0);"> <i class="fas fa-ban"></i> Block</a></li>
  </ul>
</div>
   <div class="d-flex text-muted pt-3 mb-0">
     <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg> 
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        <span class="trend-tag">#BlackLivesMatter</span>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
         <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small> &#124; 6:30 PM · 2 june, 2020</small></p>

        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
    <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
      <button type="button" class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"  data-toggle="modal" data-target="#share"><i class="fas fa-share"></i></button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none; margin-left: -50px;">
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-retweet"></i> Repost</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-edit"></i> Repost with comment</a></li>
  </ul>
  <div class="modal fade" id="share" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Share post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <ul class="list-group list-group-flush">
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-clock mr-1"></i> Share to Timeline</a>
   <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-envelope mr-1"></i> Share as message</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="fas fa-at mr-1"></i> Send as Email</a>
  <a href="javascript:void(0);" class="list-group-item text-muted"><i class="fas fa-link mr-1"></i> Copy link</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted" data-dismiss="modal"><i class="fas fa-times mr-1"></i> Close</a>
</ul>
      </div>
    </div>
  </div>
 </div>
</div>
  <p class="mb-1 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>
  <form class="d-flex" style="width: 100%;">
         <button class="btn searchbtn border-right" type="submit"><i class="fas fa-image text-muted"></i></button>
        <input class="form-control searchbox" type="text" placeholder="Add comment" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn border-left" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>
</div>


   <div class="my-3 p-3 pb-1 pt-1 shadow bg-white text-dark postcard">
   <div class="btn-group dropleft" style="float: right; margin-top:10px;">
  <button type="button"  class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false">
   <i class="fas fa-ellipsis-v"></i>
  </button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none;">
   <li><a class="dropdown-item text-muted" href="#"> <i class="fas fa-user-plus"></i> Follow</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-user-circle"></i> View profile</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-link"></i> Copy link</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-bookmark"></i> save</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-flag"></i> Report post</a></li>
    <li><a class="dropdown-item text-danger" href="javascript:void(0);"> <i class="fas fa-ban"></i> Block</a></li>
  </ul>
</div>
   <button type="button" class="btn btn-secondary-outline react btn-sm text-muted" style="float: right;  margin-top:10px; color:#555555; "><i class="fas fa-user-plus"></i> Follow</button>
    <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name</strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</small><small> &#124; 6:30 PM · 2 june, 2020</small></p>

        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
      <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
      <button type="button" class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"  data-toggle="modal" data-target="#share"><i class="fas fa-share"></i></button>
  <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none; margin-left: -50px;">
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="fas fa-retweet"></i> Repost</a></li>
    <li><a class="dropdown-item text-muted" href="javascript:void(0);"> <i class="far fa-edit"></i> Repost with comment</a></li>
  </ul>
  <div class="modal fade" id="share" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Share post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <ul class="list-group list-group-flush">
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-clock mr-1"></i> Share to Timeline</a>
   <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="far fa-envelope mr-1"></i> Share as message</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted"><i class="fas fa-at mr-1"></i> Send as Email</a>
  <a href="javascript:void(0);" class="list-group-item text-muted"><i class="fas fa-link mr-1"></i> Copy link</a>
  <a href="javascript:void(0);"  class="list-group-item text-muted" data-dismiss="modal"><i class="fas fa-times mr-1"></i> Close</a>
</ul>
      </div>
    </div>
  </div>
 </div>
</div>
  <p class="mb-1 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>
  <form class="d-flex" style="width: 100%;">
         <button class="btn searchbtn border-right" type="submit"><i class="fas fa-image text-muted"></i></button>
        <input class="form-control searchbox" type="text" placeholder="Add comment" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn border-left" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>
</div>



  </div>


  </main>
<?php
include('footer.php');
?>


<?php
//Name of Page
$pageName = "Add Post";

//Chech if i am coming from a profile page
//$onclick is the username
if(isset($_GET['onclick'])){
  $onclick = "@".$_GET['onclick']." ";
} else{
  $onclick = "";
}

//Chech if i am coming from a Trend page
//$hashclick is the trend
if(isset($_GET['hashclick'])){
  $hashclick = "#".$_GET['hashclick']." ";
} else{
  $hashclick = "";
}

//Check if i am reposting a post
if(isset($_GET['repost'])){
  $repost = true;
} else{
 $repost = false;
}

?>

<?php
include ('header-two.php');
?>
 <title>Add post · Wetroverse</title>

<style type="text/css">
 .react-tool{
          width:100%;
         } 
        
        </style>
<main class="container" style="max-width: 600px; margin-top: 20px;">
   <div class="my-3 pb-1 p-3 pt-3 shadow bg-white text-dark postcard rounded">
<div class="d-flex text-muted pt-0 mb-0">
     <svg class="bd-placeholder-img flex-shrink-0 mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg> 
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name &nbsp;<i class="fas fa-check-circle verify-tag"></i></strong>@username
      </p>
    </div>

    <form class="mb-2 border-top pt-1" style="width: 100%;">
      <textarea class="form-control text mb-3 no-resize auto-growth" type="text" placeholder="What is going on???" aria-label="Search" style=" border:none; height: 80px;" value="Full name"><?php echo"$onclick";?><?php echo"$hashclick";?></textarea>
    <div class="">


<?php 
if($repost ==true){
  ?>

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

  <?php
} else {

 ?>
 <svg class="bd-placeholder-img flex-shrink-0 rounded mr-5 shadow-sm" style="width: 100%;" height="170" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#999999"/><text x="50%" y="50%" fill="#ffffff" dy=".3em">+ Add Image/Video</text></svg>
 <?php

}
?>


  </div>

    <div class="mb-2 mt-2 d-flex">
        <button class="btn searchbtn" type="submit"><i class="fas fa-map-marker-alt text-muted"></i></button>
        <input class="form-control" type="text" placeholder="Add location" aria-label="Search" style=" border:none; background-color:none; ">

        </div>

     <div class="mb-3 mt-1 border-bottom"></div>
                   <button type="button" class="btn btn-primary mr-3 mt-2 mb-3 shadow" style=""><i class="fas fa-check"></i> Post</button>   
  
  </form>
</div>
</main>

<?php
include('footer.php');
?>

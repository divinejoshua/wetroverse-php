<?php
if(isset($_GET['posttoken'])){
  $posttoken = $_GET['posttoken'];
} 
$pageName = "Post";

?>

<?php
include ('header-two.php');
?>
 <title>Post · Wetroverse</title>

<style type="text/css">
 .react-tool{
          width:100%;
         } 
        
        </style>
<main class="container" style="max-width: 600px; margin-top: 20px; padding: 0px;">
  
      

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
     <img class="mr-2 mb-3 shadow-sm rounded" src="img/t1.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark">
        <strong class="d-block text-dark">Full Name</strong>@username
      </p>
    </div>
     <p class="pb-3 mb-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <span class="trend-tag">#SchoolReopen</span>
      </p>
      <img class="mr-3 mb-3 shadow-sm rounded border-bottom" src="img/ceo1.jpg" alt="Wetroverse" style="width: 100%">
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
  <form class="d-flex border-bottom" style="width: 100%;">
         <button class="btn searchbtn" type="submit"><i class="fas fa-image text-muted"></i></button>
        <input class="form-control searchbox" type="text" placeholder="Add comment" aria-label="Search" style=" border:none;" autofocus="On">
        <button class="btn searchbtn" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>

 
 <p class="mt-4 mb-4 ml-0 mr-0 pl-0 pb-0 text-grey-dark" style="color:#777777;">
      Comments  &#9679; 12,000   &nbsp;
     <div class="btn-group dropleft mr-2" style="float: right; margin-top: -53px;color: #555555;">
       <button type="button"  class="btn btn-secondary-outline react text-muted" data-toggle="dropdown" aria-expanded="false">
       <i class="fas fa-cog text-right"></i>
     </button>
      <ul class="dropdown-menu shadow small text-muted"  style="border-radius: 0px; border: none; margin-left: -50px;">
      <li><a class="dropdown-item text-muted" href="javascript:void(0);">Order by Top</a></li>
      <li><a class="dropdown-item text-muted" href="javascript:void(0);">Order by First to last</a></li>
      <li><a class="dropdown-item text-muted" href="javascript:void(0);">Order by Last to First</a></li>
     </ul>
  </div>
 </p>


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
 <div class="d-flex text-muted pt-3 mb-0 ml-2">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes &#9679; <span  data-toggle="collapse" data-target="#one" aria-expanded="false" aria-controls="one"><b>300</b> Replies</span> </small></p>
  <div class="collapse" id="one">
  <div class="card card-body">
    <form class="d-flex border-bottom" style="width: 100%;">
        <input class="form-control searchbox" type="text" placeholder="Reply to @username" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>

 <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes </small></p>
          <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes </small></p>
   </div>
</div>


      
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
 <div class="d-flex text-muted pt-3 mb-0  ml-2">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t1.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
         <small> <b>9000</b> Likes &#9679; <span  data-toggle="collapse" data-target="#two" aria-expanded="false" aria-controls="two"><b>300</b> Replies</span> </small></p>
  <div class="collapse" id="two">
  <div class="card card-body">
     <form class="d-flex border-bottom" style="width: 100%;">
        <input class="form-control searchbox" type="text" placeholder="Reply to @username" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>
 <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes </small></p>
          <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes </small></p>
   </div>
</div>


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
 <div class="d-flex text-muted pt-3 mb-0  ml-2">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t2.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
           <small> <b>9000</b> Likes &#9679; <span  data-toggle="collapse" data-target="#three" aria-expanded="false" aria-controls="three"><b>300</b> Replies</span> </small></p>
  <div class="collapse" id="three">
  <div class="card card-body">
     <form class="d-flex border-bottom" style="width: 100%;">
        <input class="form-control searchbox" type="text" placeholder="Reply to @username" aria-label="Search" style=" border:none;">
        <button class="btn searchbtn" type="submit"><i class="fas fa-paper-plane text-muted"></i></button>
      </form>
 <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes </small></p>
          <div class="d-flex text-muted pt-3 mb-0">
      <img class="mr-2 mb-3 shadow-sm rounded" src="img/t4.jpg" alt="Wetroverse" width="32" height="32">
        <p class="small lh-sm text-gray-dark ml-2">
        <strong class="d-block text-dark">Full Name <span class="font-weight-light" style="color: #999999;">&#9679; 5h </span></strong>@username
      </p>
    </div>
     <p class="pb-2 mb-0 ml-5 mt-0 small text-dark">
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac <span class="trend-tag">BlackLivesMatter</span> cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
        <p class="pb-4 mb-0 small text-grey-dark text-small ml-5 " style="color:#777777;">
          <i class="far fa-star text-muted mr-1" style="margin-top: -5px;"></i>
          <small> <b>9000</b> Likes </small></p>
   </div>
</div>



  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>



</div>



 

</main>

<?php
include('footer.php');
?>

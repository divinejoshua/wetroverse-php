<?php
if(isset($_GET['username'])){
  $username = $_GET['username'];
  $pageName = $username;
  $verifyTick = "<i class='fas fa-check-circle verify-tag'></i>";
} 
?>
<?php
include ('header-two.php');
?>
 <title><?php echo"$username";?> · Wetroverse</title>
<style type="text/css">
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

<span class="nav-add-post ">
<div class="nav-scroller" style="height: 100px;"><center>
  <center style="max-width: 600px;">
 <a href='addpost?onclick=<?php echo "$username"; ?> '><button type="button" class="btn btn-add-post react text-white mr-4 shadow" style=""><i class="fab fa-slack-hash" style="font-size: 23px;"></i></button></a>
</center>
</div>
</span>
<style type="text/css">
  /* Hide scrollbar for Chrome, Safari and Opera */
.searchbox{
  border:none;
  border-radius: 0px;
}
.searchbox:hover{
  border:none;
}
.searchbox:focus{
  border:none;
}
.searchbox:active{
  border:none;
}
.searchbox:after{
  border:none;
}
.searchbtn{
  border-radius:0px;
}
.active-border{
   border-bottom: 8px solid #555555;
}
</style>

<main class="container" id="mainContent" style="max-width: 600px; margin-top:14px; padding: 0px;">
  
  <style type="text/css" name="post">
    .postcard{
      border-radius: 15px;
    }

  </style>
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
  border: 1px solid #607D8B;
  padding: 3px;
  border-radius: 10px;
  height: 80px;
  width: 60px;
}
.timeline{
	 margin-right: -30px;
}
</style>
 <style type="text/css">
 .react-tool{
          width:100%;
         } 
        
  .cog-setting{
    margin-top: -42px; right: 1px; float: right; position:fixed; z-index: 1000000000;
  }
 @media (min-width: 1280px) {
.cog-setting{
    right: 0px; float:none; position:absolute; z-index:0;
  }
 }

        </style>
      <div id="myCarousel" class="carousel slide shadow" data-ride="carousel" style="max-width: 600px;">
            <a class="nav-link cog-setting text-muted" href="edit" style=""><i class="fas fa-cog"></i></a>
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active cover-image" style="width: 8px; height: 8px; border-radius: 100%;"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="width: 8px; height: 8px; border-radius: 100%;"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="width: 8px; height: 8px; border-radius: 100%;"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="" src="img/profile.png" alt="Wetroverse" width="100%" height="164" style="filter: brightness(75%); ">
        <div class="container">
          <div class="carousel-caption text-left">
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <img class="" src="img/pro.png" alt="Wetroverse" width="100%" height="164" style="filter: brightness(75%); ">
         <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <img class="" src="img/some.jpg" alt="Wetroverse" width="100%" height="164" style="filter: brightness(75%); ">
          <div class="container">
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="detail bg-white border-bottom">
     <img class="ml-2 mr-2 mb-3 shadow  mt-3" src="img/ceo1.jpg" alt="Wetroverse" width="100" height="100" style="border-radius: 15px; padding: 3px; border:2px solid #E91E63;">
     <button type="button" class="btn text-white btn-sm mt-3 mr-3 shadow-sm"  type="collapse" data-toggle="collapse" data-target="#collapseTrend" style="float: right; background-color: #E91E63;"><i class="fas fa-user-plus"></i> Added</button>
  <div class="d-flex" style="border-radius: 0px; border:none; margin-top: -130px;">
  <p class="p-0 mb-3 mt-3 small text-dark" style="padding: 0; margin-left: 120px;">
    <strong class="d-block text-dark">Another Banger <span class="font-weight-light" style="color: #999999;"> <i class="fas fa-check-circle verify-tag"></i> </span></strong>@<?php echo"$username";?>
  </p> 
  </div>
  <div class="d-flex border-bottom bg-white text-left" style="border-radius: 0px; border:none;">
  <p class="p-0 mb-3 mt-0 small text-dark" style="padding: 0;margin-left: 120px;">
    <a href="followers" class="text-muted"><strong class="d-block text-muted">Followers <span class="font-weight-light" style="color: #999999;"></span></strong>200k</a>
  </p>
   <p class="p-0 mb-3 mt-0 small text-dark" style="padding: 0;margin-left: 20px;">
     <a href="follow" class="text-muted"><strong class="d-block text-muted">Following <span class="font-weight-light" style="color: #999999;"></span></strong>1,900</a>
  </p>
  </div>

     <p class="pb-3 mb-0 mt-2 mr-3 ml-3 small text-muted border-bottom">
        <span class=""><i class="fas fa-certificate"></i> Artist</span> &nbsp;&nbsp;&nbsp;
         <span class=""><i class="fas fa-map-marker-alt"></i> Lagos</span>
          <br><span class="">https://wetroverse.com/username</span>
      </p>
   
  <p class="pb-3 mb-0 mt-2 mr-3 ml-4 small text-dark">
        The Entrepeneur mind. The loved teen. God help 🙌 <br>
        <span class="trend-tag">#EntrepeneurMind</span>
         <span class="trend-tag">@ManCity</span> <br>
            <button type="button" class="btn text-muted btn-sm mr-3 mt-2" style=" background-color: #eeeeee;"><i class="fas fa-comment-dots"></i> HMU</button>   
           <button type="button" class="btn text-muted btn-sm mr-3 mt-2" style=" background-color: #eeeeee;"><i class="far fa-bell"></i> Turn on post Notification</button>
      </p>
   <div class=" mt-2 collapse shadow-sm border-top pt-3" id="collapseTrend" style="border: none;">
    <p class="ml-3 font-weight-bold mb-4">Suggestions  <span type="" class=" text-muted mt-0 mr-4"  type="collapse" data-toggle="collapse" data-target="#collapseTrend" style="float: right; background-color: #ffffff;"><i class="fas fa-times"></i></span></p>
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

 <div class="time nav-scroller d-flex align-items-center my-0 pt-3 pb-3 text-dark-50 bg-white rounded border-bottom" style="height: 130px;">
    <center> 

   <div class="timeline" style="width: 100px;margin-right: -20px;">
     <a class="nav-link text-dark" href="#">
     <svg class="bd-placeholder-img flex-shrink-0 mr-2 time-img" width="60" height="80" xmlns="img/home.svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title>
      <rect width="100%" height="100%" src="img/home.svg"/><text x="50%" y="50%" fill="#ffffff" dy=".3em">+</text></svg>
     </a>
    </div>
  </center>
<center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
     <img class="mr-3 shadow-sm time-img" src="img/post/9.jpg" alt="Wetroverse" >
     </a>
    </div>
  </center>
   <center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
      <img class="mr-3 shadow-sm time-img" src="img/post/11.jpg" alt="Wetroverse">
    </a>
    </div>
  </center>
   <center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
    <img class="mr-3 shadow-sm time-img" src="img/post/13.jpg" alt="Wetroverse">
    </a>
    </div>
  </center>
   <center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
      <img class="mr-3 shadow-sm time-img" src="img/post/5.jpg" alt="Wetroverse">
     </a>
    </div>
  </center>
   <center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
    <img class="mr-3 shadow-sm time-img" src="img/post/3.jpg" alt="Wetroverse">
     </a>
    </div>
  </center>
   <center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
    <img class="mr-3 shadow-sm time-img" src="img/post/17.jpg" alt="Wetroverse">
     </a>
    </div>
  </center>
   <center> 
   <div class="timeline" style="width: 100px;">
     <a class="nav-link text-dark" href="#">
    <img class="mr-3 shadow-sm time-img" src="img/post/16.jpg" alt="Wetroverse">
     </a>
    </div>
  </center>
  

  </div>

<style type="text/css">
  .tabs{
    width: 33.33333333333333%;
  }
  .roll-link{
    text-align: center;
    color: #555555;
  }
  .roll-link:hover{
    color: #555555;
  }
  .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #000000;
    background-color: #ffffff;
    border-radius: 0px;
    border-bottom: 2px solid #f33446;
}
</style>

  <ul class="nav nav-pills mb-3 pt-2 bg-white border-bottom" id="pills-tab" role="tablist">
  <li class="nav-item tabs" role="presentation">
    <a class="nav-link roll-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Post</a>
  </li>
  <li class="nav-item tabs" role="presentation">
    <a class="nav-link roll-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Media</a>
  </li>
  <li class="nav-item tabs" role="presentation">
    <a class="nav-link roll-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Tag</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">  <div class="my-3 p-3 rounded shadow bg-white text-dark">
    <h6 class="border-bottom pb-2 mb-0">Posts · 121k</h6>
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
      <img class="mr-3 mb-3 shadow-sm rounded border-bottom" src="img/ceo1.jpg" alt="Wetroverse" style="width: 100%">
     <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><i class="fas fa-map-marker-alt"></i> Worldwide</small><small> &#124; 6:30 PM · 2 june, 2020</small></p>


        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
    <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>


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

        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
    <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>


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

        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
   <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>


    <small class="d-block text-right mt-3">
      <a href="#" class="text-dark" style="text-decoration: none;">View all 3000k posts about this topic &nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
    </small>
  </div>



</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><!DOCTYPE html>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  border-radius: 3px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
   .column .last{
     -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */

</style>


<!-- Header -->
<div class="bg-white rounded shadow" style="padding: 10px;">
    <h6 class="border-bottom pb-2 mb-0" style="padding: 5px;">Images · 121k</h6>
   
<!-- Photo Grid -->
<div class="row"> 

  <div class="column">
    <img src="img/t1.jpg" class="shadow-sm" style="width:100%">
    <img src="img/ceo1.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/1.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/2.jpg" class="shadow-sm" style="width:100%">
     <img src="img/post/3.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/4.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/5.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/6.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/7.jpg" class="shadow-sm" style="width:100%">
  </div>
  <div class="column">
    <img src="img/t2.jpg" class="shadow-sm" style="width:100%">
    <img src="img/pro.png" class="shadow-sm" style="width:100%">
     <img src="img/post/8.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/9.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/11.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/16.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/17.jpg" class="shadow-sm" style="width:100%">
    <img src="img/post/11.jpg" class="shadow-sm" style="width:100%">
  </div>  
 
</div>
</div>

</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    

      <div class="my-3 p-3 rounded shadow bg-white text-dark">
    <i class="fas fa-chevron-right" style="float: right;"></i>
    <h6 class="border-bottom pb-2 mb-0">Tagged posts · 121k</h6>
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
      <img class="mr-3 mb-3 shadow-sm rounded border-bottom" src="img/ceo1.jpg" alt="Wetroverse" style="width: 100%">
     <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><i class="fas fa-map-marker-alt"></i> Worldwide</small><small> &#124; 6:30 PM · 2 june, 2020</small></p>


        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
    <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>


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

        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
    <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>


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

        <p class="pb-3 mb-0 small text-grey-dark text-small" style="color:#777777;"><small><b>9000</b> Likes &#9679; <b>300</b> Comments &#9679; <b>500</b> Reposts </small></p>
       
        <div class="btn-group react-tool border-top" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary-outline react text-warning"><i class="fas fa-star"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="far fa-comment-dots"></i></button>
   <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-retweet"></i></button>
  <button type="button" class="btn btn-secondary-outline react text-muted"><i class="fas fa-share"></i></button>
</div>
  <p class="mb-3 small ml-0 mr-0 pl-0 pb-0 text-grey-dark border-bottom text-small" style="color:#777777;"></p>


    <small class="d-block text-right mt-3">
      <a href="#" class="text-dark" style="text-decoration: none;">View all 3000k posts about this topic &nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
    </small>
  </div>


  </div>
</div>
</main>
<?php
include('footer.php');
?>

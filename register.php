<?php
include ('header-form.php');
?>
 <title>Register for Wetroverse</title> 
<?php
$todayDate = time();
$todayDate = date("Y-m-d h:i:s a", "$todayDate");
$YearsAgo13 = date( "Y-m-d", strtotime( "$todayDate -13 years" ) );
$YearsAgo100 = date( "Y-m-d", strtotime( "$todayDate -100 years" ) );
?>
    <body class="bg-light">
    
<form class="form-signin">
  <div class="text-center mb-4 border-bottom">
    <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-bold">Wetroverse</h1>
    <style type="text/css">
      .blockquote{
        border-left:4px solid #00bcd4;
        border-radius: 0px;
        text-align: left;
        opacity: 1;
      animation-name: fadeInOpacity;
      animation-iteration-count: 1;
      animation-timing-function: ease-in;
      animation-duration: 2s;
      }
       @keyframes fadeInOpacity {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
       .blockquote h6{
        margin-left: 20px;
      }
    </style>
   <blockquote class="blockquote"><h6 class="font-weight-light">Millions of things go on in our society daily. Join the Wetroverse community now</h6></blockquote>
 
    </div>
  <div class="row">
  <div class="col-md-12">
  <div class="form-label-group">
    <input type="text" id="fullname" class="form-control shadow-sm" placeholder="username" required autofocus>
    <label for="fullname">Fullname</label>
  </div>
</div>
 <div class="col-md-6">
  <div class="form-label-group">
    <input type="text" id="username" class="form-control shadow-sm" placeholder="Username" required>
    <label for="username">Username</label>
  </div>
</div>
 <div class="col-md-6">
  <div class="form-label-group">
    <input type="email" id="Email" class="form-control shadow-sm" placeholder="Email" required>
    <label for="Email">Email</label>
  </div>
</div>
 <div class="col-md-6">
  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control shadow-sm" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>
</div>
 <div class="col-md-6">
  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control shadow-sm" placeholder="Password" required>
    <label for="inputPassword">Repeat password</label>
  </div>
</div>
  <div class="col-12 mb-2">
     <select class="form-select" id="state" required>
     <option value="">Select Gender</option>
     <option>Male</option>
     <option>Female</option>
     <option>Custom</option>
     </select>
    </div>
  <label for="state" class="form-label">Date of Birth</label>
    <div class="col-12 mb-3">
     <input class="form-control" type="date" name="dateofbirth" min="<?php echo "$YearsAgo100";?>" max="<?php echo "$YearsAgo13";?>">
    </div>
</div>
  <div class="checkbox mb-3">
    <input class="form-check-input bg-red" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  I agree to terms of usage.
  </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block shadow" type="submit">Register</button>
  <p class="mt-2 mb-0 text-muted text-center" style="padding: 10px;"><a href="login?login" class="link-secondary">Already have an account, login.</a></p>
</form>


    
  </body>
   <?php
include ('footer-form.php');
  ?>
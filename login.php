<?php
$username = "";
if(isset($_POST['username'])){
  $username = $_POST['username'];
//header("location:register");
}

?>
<?php
include ('header-form.php');
?>
 <title>Login to Wetroverse</title> 
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
    <body class="bg-light">
    
<form class="form-signin" method="POST" action="login">
  <div class="text-center mb-4 border-bottom">
    <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-bold">Wetroverse</h1>
   <blockquote class="blockquote"><h6 class="font-weight-light">Millions of things go on in our society daily. Be part of the story. Login to Wetroverse</h6></blockquote>
   
    </div>
  <div class="form-label-group">
    <input type="emails" id="email" class="form-control shadow-sm" name="username" placeholder="username" required autofocus>
    <label for="username">Username / Email / Phone number</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" class="form-control shadow-sm" placeholder="Password" required>
    <label for="inputPassword">Password</label>
     <p class="text-muted text-left" style="padding: 10px;"><a href="fpassword" class="link-secondary">Forgot password?</a></p>
  </div>

  <div class="checkbox mb-3">
    <input class="form-check-input bg-red" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   keep me Logged in
  </label>
  </div>
  <div class="text-success mb-2 text-center" id="display"><?php echo "$username"; ?></div>
  <button class="btn btn-lg btn-primary btn-block shadow" type="submit" name="login">Sign in</button>
  <p class="mt-2 mb-0 text-muted text-center" style="padding: 10px;"><a href="register" class="link-secondary">Create a new account.</a></p>
</form>


    
  </body>
  <?php
include ('footer-form.php');
  ?>
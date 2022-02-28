<?php
include ('header-form.php');
?>
 <title>Forgot password · Wetroverse</title>  
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
  
    } 

   
       .blockquote h6{
        margin-left: 20px;
      }
      
    </style>
   <blockquote class="blockquote"><h6 class="font-weight-light">Enter your <b>email address</b> that you used to register. We'll send you an email with your username and a link to reset your password.</h6></blockquote>
   
    </div>

 
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control shadow-sm" placeholder="email" required autofocus>
    <label for="username">Email address</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block shadow" type="submit">Send Link</button>
  <p class="mt-2 mb-0 text-muted text-center" style="padding: 10px;"><a href="login.php" class="link-secondary">Back to login.</a></p>
</form>


    
  </body>
    <?php
include ('footer-form.php');
  ?>
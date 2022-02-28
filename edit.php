<?php
//Name of Page
$pageName = "Edit Profile";
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
     <form class="bg-white shadow-sm rounded pb-5 pl-3 pt-2 pr-3" style="width: 100%; ">
    
  <div class="row border-bottom">
    <p class="mt-2"><span class="font-weight-bold">Cover image</span> · <span class="font-weight-light">Tap image to edit</span></p>
    <div class="col-4">
    <img class="mb-3 shadow-sm" src="img/profile.png" alt="Wetroverse" height="80" style="width: 100%">
    </div>
   <div class="col-4">
    <img class="mb-3 shadow-sm" src="img/some.jpg" alt="Wetroverse" height="80" style="width: 100%">
    </div>
     <div class="col-4">
    <svg style=" width: 100%" class=" mb-3 shadow-sm bd-placeholder-img flex-shrink-0" height="80" xmlns="img/home.svg" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title>
      <rect width="100%" height="100%" fill="#999999"/><text x="50%" y="50%" fill="#ffffff" dy=".3em">+</text></svg>
    </div>
        </div>
            <p class="mt-2"><span class="font-weight-bold">Profile image</span> · <span class="font-weight-light">Tap image to edit</span></p>
    <img class="ml-2 mr-2 mb-3 shadow-sm  mt-1" src="img/ceo1.jpg" alt="Wetroverse" width="100" height="100" style="border-radius: 10px; padding: 2px; border:1px solid #cccccc;">
   <div class="border-bottom mb-2"></div>
    <p class="mt-2"><span class="font-weight-bold">General information</span></p>
        <input class="form-control text mb-3 border shadow-sm" type="text" placeholder="Fullname" aria-label="Search" style=" border:none;" value="Full name">
         <input class="form-control text mb-3 border  shadow-sm" type="text" placeholder="Username" aria-label="Search" style=" border:none;" value="Username">
            <input class="form-control text mb-3 border  shadow-sm" type="url" placeholder="Known as" aria-label="Search" style=" border:none;" value="Entrepenur">
              <input class="form-control text mb-3 border shadow-sm" type="url" placeholder="Website" aria-label="Search" style=" border:none;" value="Website">
              <textarea class="form-control text mb-3 border  shadow-sm" placeholder="About">Entrepeneur minds</textarea>
           <p class="mt-2"><span class="font-weight-bold">Personal information</span></p>
                <input class="form-control text mb-3 border shadow-sm" type="email" placeholder="Email" aria-label="Search" style=" border:none;" value="email">
                <input class="form-control text mb-3 border shadow-sm" type="tel" placeholder="Email" aria-label="Search" style=" border:none;" value="Phone number">
                <div class="row">
                   <label for="state" class="form-label">Date of Birth</label>
    <div class="col-4 mb-3">
     <select class="form-select shadow-sm" id="state" required>
     <option value="">Day</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     </select>
    </div>
     <div class="col-4 mb-3">
     <select class="form-select shadow-sm" id="state" required>
     <option value="">Month</option>
     <option>January</option>
     <option>Febuary</option>
     <option>March</option>
     <option>April</option>
     <option>May</option>
     <option>June</option>
     <option>July</option>
     <option>August</option>
     <option>September</option>
     <option>October</option>
     <option>November</option>
     <option>December</option>
     </select>
    </div>
    <div class="col-4 mb-3">
     <select class="form-select shadow-sm" id="state" required>
     <option value="">Year</option>
     <option>2007</option>
     <option>2006</option>
     <option>2005</option>
     </select>
    </div>
                </div>
                  <button type="reset" class="btn shadow-sm border mr-3 mt-3" style=" background-color: #ffffff; color: #222222;"><i class="fas fa-times"></i> Reset</button>  
                   <button type="button" class="btn mr-3 shadow-sm border mt-3" style=" background-color: #673AB7; color: #ffffff;"><i class="fas fa-check"></i> Save changes</button>    
  </form>


</main>
<?php
include('footer.php');
?>

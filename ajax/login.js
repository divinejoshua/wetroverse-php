$(document).ready(function(){
$("#login").click(function(){
var email = $("#email").val();
var password = $("#password").val();
var dataString = 'email='+ email + '&password='+ password;

if(email==''||password=='')
{
$("#display").html("*Please Fill All Fields");
}
else
{
$("#display").html("");
$.ajax({
type: "POST",
url: "ajax/login.php",
data: dataString,
cache: false,
success: function(result){
$("#display").html(result);
}
});
}
return false;
});
});
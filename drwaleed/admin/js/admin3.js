
function f(){

var error=false;
var email=document.getElementById("email").value;
var name="a";
if(document.getElementById("name")){
    name=document.getElementById("name").value;
}
var password=document.getElementById("password").value;
var passwordcon="a";
if(document.getElementById("passwordcon")){
    passwordcon=document.getElementById("passwordcon").value
}

if(email==""||password==""||name==""||passwordcon==""){
    error=true;
    
    document.getElementById("danger").style.opacity=1;
    
   
  
   $(".form-control").addClass("shake");
     
    
    
}
else if(password!=passwordcon){
    error=true;
     document.getElementById("danger2").style.opacity=1;
     
   $(".form-control").addClass("shake");
}

return !error;
}

function x(){
    document.getElementById("danger").style.opacity=0;
    if(document.getElementById("danger2")){
        document.getElementById("danger2").style.opacity=0;
    }
    

}
window.onclick=function(){
    $(".form-control").removeClass("shake");
    x();
}




function f(){
var error=false;
var code=document.getElementById("code").value;
if(code==""){
    error=true;   
    document.getElementById("danger").style.opacity=1;
    
    return!error;
}
return!error;

}

function x(){
    document.getElementById("danger").style.opacity=0;
    if(document.getElementById("danger2")){
        document.getElementById("danger2").style.opacity=0;
    }

}
window.onclick=function(){
    
    x();
}

var i=-1;
var lock =false;
var timeout;
$(document).ready(function(){
    $("#social-swip-btn-div").click(function(){
        $("#social-swip-btn").toggleClass("social-swip-btn-active");
        $("#social-networks-cont").toggleClass("social-networks-cont-active");
    });
      
    $("#btn-menu").click(function(){
        
        $("#toggle-content").toggleClass("toggled");
        $(this).toggleClass("pressed");
        
    });
    
    var sliderlen=$(".slide").length;    
    changeImg(sliderlen);
    
    $(".slider-btn-cont").mouseover(function(){
        lock=true;
        clear();
        
    });
    $(".slider-btn-cont").mouseleave(function(){
        lock=false;
        
        timeout=setTimeout("changeImg("+sliderlen+")",5000);   
    }); 
    
    $("#arrow-down").click(function(){
        window.scrollTo({ 
            top: $("#blue-div").offset().top-($("#nav").height()-2), 
            left: 0, 
            behavior: 'smooth' 
        });
    });
    
    // bmi start

    $(".calculator-input").on("input",function(){
        var weight=0;
        var height=1;
        if($("#weigth").val()!=""){
            weight=parseFloat( $("#weight").val());
            //height=parseFloat( $("#height").val());
            }
        if($("#height").val()!=""){
        //weight=parseFloat( $("#weight").val());
            height=parseFloat( $("#height").val());
            height/=100;
        }
    var BMI=weight/(height*height);
        if(BMI>999){
            BMI=0;
        }
    var hundreds=parseInt( BMI/100);
        var tens=parseInt( (BMI/10)%10);
        var units=parseInt(BMI%10);
        var decimal=parseInt((BMI*10)%10);
        console.log(hundreds+""+tens+""+units+"."+decimal);
        changenum("#decimal",decimal);
        changenum("#units",units);
        changenum("#tens",tens);
        changenum("#hundreds",hundreds);
        if($("#height").val()!=""&& $("#weigth").val()!=""){
            
            if(BMI>=12&&BMI<=18){
            $(".msg").html("Underweight");
            $(".msg").css({
                "color":"skyblue"
            });
            }
            else if(BMI>18 && BMI<24){
                $(".msg").html("Healthy");
                $(".msg").css({
                    "color":"rgb(77, 139, 81)"
                });
                }
            else if(BMI>=24 && BMI<29){
                $(".msg").html("Overweight");
                $(".msg").css({
                    "color":"orange"
                });
            }
            else if(BMI>=29 && BMI<=39){
                $(".msg").html("Obese");
                $(".msg").css({
                    "color":"orangered"
                });
            }
            else if( BMI>39){
                $(".msg").html("Extremly obese");
                $(".msg").css({
                    "color":"red"
                });
            }     
        }
        else{
            $(".msg").html("");
        }
        if(BMI<12){
            $(".msg").html("");
        }
    });
    
    
    
    $(".calculator-input").keydown(function (e) {
       
        
        if((e.keyCode==190 || e.keyCode==110)){
            if($(this).val().includes(".")){
            e.preventDefault();}  
         }
          // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        
        var input=parseInt( $(this).val());
        if (((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) ) {
            e.preventDefault();
        }
        if(parseInt(input/100)!=0 && $(this).val()!=""&&$(this).val().includes(".")==false){
                e.preventDefault();
        }
            
    
        
        
    });

    // bmi ready end
    



        //gastric img start
        var navHeight=$("#nav").height();
        $("#logo").height(navHeight*0.957);
        $("#logo").width(navHeight*1.489);
        
    
        $(window).scroll(function(){
            
            var bottomDiv = $("#svg1").offset().top ;
            var bottomWindow = $(window).scrollTop() + $(window).height();
            if( bottomWindow >= bottomDiv ){
                $("#svg1 .hide").addClass("animate-trans");
                $("#svg1 .hideline").addClass("animate-hideline");
               
            }
            
            var WScroll=$(window).scrollTop();
            var navHeight=$("#nav").height();
            $("#logo").height(navHeight*0.957);
             $("#logo").width(navHeight*1.489);
            
        if(WScroll>=$("#blue-div").offset().top-($("#nav").height())+1){
            if($("#nav").height()>=75)
            $("#nav").height($("#nav").height()-1);
        }
        else if(WScroll<$("#blue-div").offset().top-($("#nav").height()-2)&&($("#nav").height()<94)){
            $("#nav").height($("#nav").height()+1);
        }



        //gastric imgs end
            //paraallex videos
            $('.parallex-video').each(function() {
                var bottomDiv = $(this).offset().top ;
                var bottomWindow = $(window).scrollTop() + $(window).height();
                if( bottomWindow >= bottomDiv ){
                    $(this).addClass("animate-video");
                    
                }
    
    
        });
    

            //end parallex videos

        });




    //videos
    var srcOriginal,srcNew;
    $(".video-item").mouseover(function(){
        srcOriginal=$(this).attr("src");
        srcNew=srcOriginal+"?autoplay=1";
        $(this).attr("src",srcNew);
        $(this).addClass("scaled")
        $(this).removeClass("unscaled");
        
        
    });
    
        $(".video-item").mouseleave(function(){
            $(this).attr("src",srcOriginal);
            $(this).addClass("unscaled");
            $(this).removeClass("scaled");
        });

        // videos end


    $(".animate-video-onload").each(function(i){
        
        setTimeout(function(){ $(".animate-video-onload").eq(i).addClass("animate-video");},150*(i+1));
    });



    //modal
    $(".story-btn").click(function(){
        var desc=$(".enstory"+""+$(".story-btn").val()).text();
        $(".modal-content .modal-para").text(desc);
        var img=$(".img"+""+$(".story-btn").val()).text();
        $(".modal-body .imgs-modal").attr("src","../images/stories/"+img);
    });

    $(".artranslate").click(function(){
        var desc=$(".arstory"+""+$(".story-btn").val()).text();
        $(".modal-content .modal-para").text(desc);
        $(this).css("display","none");
        $(".entranslate").css("display","block");
    });
    $(".entranslate").click(function(){
        var desc=$(".enstory"+""+$(".story-btn").val()).text();
        $(".modal-content .modal-para").text(desc);
        $(this).css("display","none");
        $(".artranslate").css("display","block");
    });
    

  
});

function changeImg(sliderlen){
    

        
        if(!lock){ 
        if($(".slide").hasClass("showed-slide")){
            $(".slide").removeClass("showed-slide");
        }
        if(i<sliderlen-1){
            if(!lock)
                i++;
        }
        else{
            if(!lock)
                i=0;
        }
    }
    else{
        return 0;
    }
    //console.log(i);  
    $(".slide").eq(i).addClass("showed-slide");
         
    if(!lock)
        timeout=setTimeout("changeImg("+sliderlen+")",5000);   
    

}

function plusIndex(n,sliderlen){
    if($(".slide").hasClass("showed-slide")){
        $(".slide").removeClass("showed-slide");
    }
    if(i+n<sliderlen && i+n>=0)
        i+=n;
    else if(i+n>=sliderlen)
        i=0;
    else if(i+n<0)
        i=sliderlen-1;
    //console.log(i);  
    $(".slide").eq(i).addClass("showed-slide");
    
}
function clear(){
    clearTimeout(timeout);
}

function changenum(id,num){
    var count=0;
    
    $(id).find(".section").css({
        "opacity":"1"
    });
    $(id).find(".middle-before").css({
        "opacity":"0.12"
    });
    $(id).find(".middle-after").css({
        "opacity":"0.12"
    });
    
    if(num==1 || num==4 ){
    $(id).find(".top").css({
        "opacity":"0.12"
    });
    }
    if(num==1 || num==2 || num==3 || num==7 ){
        $(id).find(".top-left").css({
            "opacity":"0.12"
        });
        }
    if(num==1 || num==3 || num==4 || num==5 || num==7 ||num==9 ){
        $(id).find(".bottom-left").css({
            "opacity":"0.12"
        });
    }
    if(num==1 || num==4 || num==7 ){
        $(id).find(".bottom").css({
            "opacity":"0.12"
        });
        }
    if(num==2){
        $(id).find(".bottom-right").css({
            "opacity":"0.12"
        });
    }
    if(num==5 || num==6 ){
        $(id).find(".top-right").css({
            "opacity":"0.12"
        });
        }
        if(num==2 || num==3 ||num==4 ||num==5 ||num==6 ||num==8 ||num==9 ){
            $(id).find(".middle-before").css({
                "opacity":"1"
            });
            $(id).find(".middle-after").css({
                "opacity":"1"
            });
            }
}
    //stories start
    $(function(){
        
        $('.card-front').mouseover(function(){
            
            $(this).parents('.rotate-container ').children('.card-front').addClass('rotate-card-front');
            $(this).parents('.rotate-container').children('.card-back').addClass('rotate-card-back');
            $(".book-img").fadeIn(1000);
        });
        
        $('.card-back').mouseleave(function(){
            $(this).parents('.rotate-container ').children('.card-front').removeClass('rotate-card-front');
            $(this).parents('.rotate-container').children('.card-back').removeClass('rotate-card-back');
            $(".book-img").fadeOut(200);

        });
        
        
    });



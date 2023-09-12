$(".sub").click(function(){
    let fname = $("#fn").val();
    if(fname === ""){
        $(".fname").html("First Name is required");
        $("#fn").css("border","2px solid white");
    }
    let lname = $("#ln").val();
    if(lname === ""){
        $(".lname").html("Last Name is required");
        $("#ln").css("border","2px solid white");
    }
    let gen = $("input:radio:checked").length;
    if(gen === 0){
        $(".gen").html("Please select your gender");
    }
    let dob = $("#dob").val();
    if(dob === ""){
        $(".dob").html("Please input your DOB");
        $("#dob").css("border","2px solid white");
    }
    let mob = $("#mob").val();
    if(mob.length < 10){
        $(".mob").html("Please enter a valid mobile number");
        $("#mob").css("border","2px solid white");
    }
    let em = $("#em").val();
    if(em === ""){
        $(".email").html("Enter your email");
        $("#em").css("border","2px solid white");
    }
    let pass = $("#pass").val();
    if(pass.length < 8){
        $(".pass").html("Enter your password");
        $("#pass").css("border","2px solid white");
    }
    let con = $("#con").val();
    if(con !== pass){
        $(".con").html("Passwords doesn't match");
        $("#con").css("border","2px solid white");
    }
});

$("#fn").focus(function(){
    $(".fname").empty();
    $(this).css("border","none");
})
$("#ln").focus(function(){
    $(".lname").empty();
    $(this).css("border","none");
})
$("#gen").focus(function(){
    $(".gen").empty();
    // $(this).css("border","none");
})
$("#dob").focus(function(){
    $(".dob").empty();
    $(this).css("border","none");
})
$("#mob").focus(function(){
    $(".mob").empty();
    $(this).css("border","none");
})
$("#em").focus(function(){
    $(".email").empty();
    $(this).css("border","none");
})
$("#pass").focus(function(){
    $(".pass").empty();
    $(this).css("border","none");
})
$("#con").focus(function(){
    $(".con").empty();
    $(this).css("border","none");
})
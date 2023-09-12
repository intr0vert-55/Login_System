$(".fp").click(function(){
    window.alert("Relax and try to remember your password");
});

$(".sub").click(function(){
    let email = $("#em").val();
    if(email === ""){
        $(".email").html("Enter your email");
        $("#em").css("border","2px solid white");
    }
    else{
        $(".email").empty();
    }
    let pass = $("#pa").val();
    if(pass === ""){
        $(".password").html("Enter your password");
        $("#pa").css("border","2px solid white");
    }
    else{
        $(".password").empty();
    }
});
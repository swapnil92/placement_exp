var flag = 0;

$(document).on("click", "#actionSelector a", function() {
    //alert($(this).prop("id").toString());
    if( $(this).prop("id").toString() === "loginTab" ) {
        if(flag === 0) {
            $("#loginForm").fadeIn();
            flag = 1;
        }
        else if(flag === 2) {
            $("#registerForm").fadeOut(function() {
                $("#loginForm").fadeIn();
            });
            flag = 1;
        }
    }
    else if( $(this).prop("id").toString() === "registerTab" ) {
        if(flag === 0) {
            $("#registerForm").fadeIn();
            flag = 2;
        }
        else if(flag === 1) {
            $("#loginForm").fadeOut(function() {
                $("#registerForm").fadeIn();
            });
            flag = 2;
        }
    }
});
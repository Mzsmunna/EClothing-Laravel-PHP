$(document).ready(function () {

    $("#login").submit(function (event) {

        //var username = $("#exampleInputEmail1").val();
        //var password = $("#exampleInputPassword1").val();
        var username = document.getElementById("usernameEmail").value;
        var password = document.getElementById("password").value;
        console.log(username);
        console.log(password);
        $("#userDNE").html("");
        $("#pwdERR").html("");

        if ((username == "") || (password == "")) {
            if (username == "") {
                //alert("username empty.");
                $("#usernameEmail").addClass("is-invalid");
                $("#usernameEmailHelp").html("username can't be empty");

            } else if (username != "") {
                //alert("username OK.");
                $("#usernameEmail").removeClass("is-invalid");
                $("#usernameEmailHelp").html("");
            }

            if (password == "") {
                //alert("password empty.");
                $("#password").addClass("is-invalid");
                $("#passwordHelp").html("password can't be empty");

            } else if (password != "") {
                //alert("password OK.");
                $("#password").removeClass("is-invalid");
                $("#passwordHelp").html("");

            }

            event.preventDefault();

        } else {

            if (username.length < 3) {
                //alert("username length should be at least 3");
                $("#usernameEmail").addClass("is-invalid");
                $("#usernameEmailHelp").html("username length should be at least 3");
                event.preventDefault();

            } else if (username.length >= 3) {

                $("#usernameEmail").removeClass("is-invalid");
                $("#usernameEmailHelp").html("");
            }

            if (password.length < 3) {
                //alert("password is too short");
                $("#password").addClass("is-invalid");
                $("#passwordHelp").html("password is too short");
                event.preventDefault();

            } else if (password.length >= 3) {

                $("#password").removeClass("is-invalid");
                $("#passwordHelp").html("");

            }
        }

        //$( "#FORM ID NAME" ).submit();
    });

});
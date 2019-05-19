$(document).ready(function () {

    $("#contactForm").submit(function (event) {

        var fullname = $("#fullname").val();
        var email = $("#email").val();
        var pnumber = $("#pnumber").val();
        //var message = $("#message").text();
        var message = document.getElementById("message").value

        console.log(fullname);
        console.log(message);
        console.log(email);
        console.log(pnumber);

        if ((fullname == "") || (message == "") || (email == "") || (pnumber == "")) {
            //alert("fullname, phonenumber, email, message can't be empty");
            console.log('inside if');

            if (fullname == "") {
                $("#fullname").addClass("is-invalid");
                $("#fullnameHelp").html("fullname can't be empty");

            } else if (fullname != "") {
                $("#fullname").removeClass("is-invalid");
                $("#fullnameHelp").html("");
            }

            if (pnumber == "") {
                $("#pnumber").addClass("is-invalid");
                $("#pnumberHelp").html("Phone Number can't be empty");

            } else if (pnumber != "") {

                $("#pnumber").removeClass("is-invalid");
                $("#pnumberHelp").html("");

            }

            if (message == "") {
                $("#message").addClass("is-invalid");
                $("#messageHelp").html("Message can't be empty");

            } else if (message != "") {

                $("#message").removeClass("is-invalid");
                $("#messageHelp").html("");

            }

            if (email == "") {
                $("#email").addClass("is-invalid");
                $("#emailHelp").html("email can't be empty");

            } else if (email != "") {

                $("#email").removeClass("is-invalid");
                $("#emailHelp").html("");
            }

            event.preventDefault();

        } else {

            //alert("inside else");
            console.log("inside else");

            var hasNumber = /\d/;

            if (hasNumber.test(fullname)) {
                $("#fullname").addClass("is-invalid");
                $("#fullnameHelp").html("fullname can't contain a number");
                event.preventDefault();

            } else if (!(hasNumber.test(fullname))) {

                $("#fullname").removeClass("is-invalid");
                $("#fullnameHelp").html("");

            }

            if (fullname.length < 5) {
                //alert("username length should be at least 3");
                $("#fullname").addClass("is-invalid");
                $("#fullnameHelp").html("username length should be at least 5");
                event.preventDefault();

            } else if (fullname.length >= 5) {

                $("#fullname").removeClass("is-invalid");
                $("#fullnameHelp").html("");
            }

            if (!isvalidemail(email)) {
                //alert("Invalid Email ID");
                $("#email").addClass("is-invalid");
                $("#emailHelp").html("Invalid Email ID");
                event.preventDefault();

            } else if (isvalidemail(email)) {

                $("#email").removeClass("is-invalid");
                $("#emailHelp").html("");

            }

            if (isNaN(pnumber)) {
                //alert("Invalid Phone Number");
                $("#pnumber").addClass("is-invalid");
                $("#pnumberHelp").html("Invalid Phone Number");
                event.preventDefault();

            } else if (!(isNaN(pnumber))) {

                $("#pnumber").removeClass("is-invalid");
                $("#pnumberHelp").html("");

                if ((pnumber.length >= 1) && (pnumber.length < 8)) {
                    //alert("Not a Valid length for Phone Number");
                    $("#pnumber").addClass("is-invalid");
                    $("#pnumberHelp").html("Not a Valid length for Phone Number");
                    event.preventDefault();

                } else if (pnumber.length >= 8) {

                    $("#pnumber").removeClass("is-invalid");
                    $("#pnumberHelp").html("");
                }

            }

        }

        function isvalidemail(email) {

            // Get email parts
            var emailParts = email.split('@');

            // There must be exactly 2 parts
            if (emailParts.length !== 2) {
                //alert("Wrong number of @ signs");
                return false;
            }

            // Name the parts
            var emailName = emailParts[0];
            var emailDomain = emailParts[1];

            // === Validate the parts === \\

            // Must be at least one char before @ and 3 chars after
            if (emailName.length < 1 || emailDomain.length < 3) {
                //alert("Wrong number of characters before or after @ sign");
                return false;
            }

            // Define valid chars
            var validChars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '.', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '_', '-'];

            // emailName must only include valid chars
            for (var i = 0; i < emailName.length; i += 1) {
                if (validChars.indexOf(emailName.charAt(i)) < 0) {
                    //alert("Invalid character in name section");
                    return false;
                }
            }
            // emailDomain must only include valid chars
            for (var j = 0; j < emailDomain.length; j += 1) {
                if (validChars.indexOf(emailDomain.charAt(j)) < 0) {
                    //alert("Invalid character in domain section");
                    return false;
                }
            }

            // Domain must include but not start with .
            if (emailDomain.indexOf('.') <= 0) {
                //alert("Domain must include but not start with .");
                return false;
            }

            // Domain's last . should be 2 chars or more from the end
            var emailDomainParts = emailDomain.split('.');
            if (emailDomainParts[emailDomainParts.length - 1].length < 2) {
                //alert("Domain's last . should be 2 chars or more from the end");
                return false;
            }

            //alert("Email address seems valid");
            return true;
        }

    });

});
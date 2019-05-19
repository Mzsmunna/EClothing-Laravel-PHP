$(document).ready(function () {

    $("#country").change(function () {

        //var country=$("#Country option:selected" ).text();
        var country = $("#country").val();

        if (country == "Bangladesh") {
            //alert(country);
            /*var countrylist = ["Dhaka", "Chittagong", "Rajshahi", "Rangpur", "Barishal", "Khulna"];
            var html = '';
            for (var i=0; i < countrylist.length; i++) {
                html += "<option value="+countrylist[i]+">" + countrylist[i] + "</option>";
            }
            $("#City").append(html);*/
            $("#city").html('<option value="Other">Select City</option><option value="Dhaka">Dhaka</option><option value="Chittagong">Chittagong</option><option value="Rajshahi">Rajshahi</option><option value="Khulna">Khulna</option><option value="Barishal">Barishal</option><option value="Rangpur">Rangpur</option><option value="Sylhet">Sylhet</option>');
        } else if (country == "India") {
            $("#city").html('<option value="Other">Select City</option><option value="Dellhi">Dellhi</option><option value="Mumbai">Mumbai</option><option value="Panjab">Panjab</option><option value="Hydrabad">Hydrabad</option><option value="Chennai">Chennai</option><option value="Kolkata">Kolkata</option><option value="Pune">Pune</option>');
        }

    });

    $("#city").change(function () {

        var city = $("#city").val();

        if (city == "Dhaka") {
            $("#area").html('<option value="Other">Select Area</option><option value="Adabor">Adabor</option><option value="Agargaon">Agargaon</option><option value="Badda">Badda</option><option value="Baily Road">Baily Road</option><option value="Banani">Banani</option><option value="Baridhara">Baridhara</option><option value="Basabo">Basabo</option><option value="Rampura">Rampura</option><option value="Banashree">Banashree</option><option value="Cantonment">Cantonment</option><option value="Chowdhury Para">Chowdhury Para</option><option value="Chawkbazar">Chawkbazar</option><option value="Dhanmondi">Dhanmondi</option><option value="Elephant Road">Elephant Road</option><option value="Escaton">Escaton</option><option value="Firm Gate">Firm Gate</option><option value="Goran">Goran</option><option value="Gulshan 1">Gulshan 1</option><option value="Gulshan 2">Gulshan 2</option><option value="Jatrabari">Jatrabati</option><option value="Kakrail">Kakrail</option><option value="Kalabagan">Kalabagan</option><option value="Katabon">Katabon</option><option value="Kallyanpur">Kallyanpur</option><option value="Kawran Bazar">Kawran Bazar</option><option value="Khilgaon">Khilgaon</option><option value="Khilkhet">Khilkhet</option><option value="Lalbagh">Lalbagh</option><option value="Lalmatia">Lalmatia</option><option value="Malibag">Malibag</option><option value="Magbazar">Magbazar</option><option value="Mirpur">Mirpur</option><option value="Mohakhali">Mohakhali</option><option value="Mohammadpur">Mohammadpur</option><option value="Mouchak">Mouchak</option><option value="New Market">New Market</option><option value="Nikunjo">Nikunjo</option><option value="Niketon">Niketon</option><option value="Panthapath">Panthapath</option><option value="Ramna">Ramna</option><option value="Rayer Bazar">Rayer Bazar</option><option value="Shahbag">Shahbag</option><option value="Shaymoli">Shaymoli</option><option value="Shegunbagicha">Shegunbagicha</option><option value="Tejgaon">Tejgaon</option><option value="Utttara">Uttra</option><option value="Uttara Khan">Uttara Khan</option><option value="Zigatola">Zigatola</option>');

        } else if (city == "Chittagong") {
            $("#area").html('<option value="Other">Select Area</option><option value="2 no gate">2 no gate</option><option value="Agrabad">Agrabad</option><option value="Chwak Bazar">Chwak Bazar</option><option value="Foys Lake r-a">Foyas Lake r-a</option><option value="GEC More">GEC More</option><option value="Jamal Khan">Jamal Khan</option><option value="Kazi Dewan Bari">Kazi Dewan Bari</option><option value="Khulshi">Khulshi</option><option value="Lalkhan Bazar">Lalkhan Bazar</option><option value="Mehdibag r-a">Mehdibag r-a</option><option value="Muradpur">Muradpur</option><option value="Nasirabad Housing Society">Nasirabad Housing Society</option><option value="O R Nizam Road">O R Nizam Road</option><option value="Sholoshahar">Sholoshahar</option>');

        } else if (city == "Barishal") {

            $("#area").html('<option value="Other">Select Area</option><option value="Agailjhara">Agailjhara</option><option value="Babuganj">Babuganj</option><option value="Bakerganj">Bakerganj</option><option value="Barisal Sadar">Barisal Sadar</option><option value="Banaripara">Banaripara</option><option value="Gaurnadi">Gaurnadi</option><option value="Hizla">Hizla</option><option value="Mehendiganj">Mehendiganj</option><option value="Muladi">Muladi</option><option value="Wazirpur">Wazirpur</option>');

        } else {

            $("#area").html('<option value="Not Available">Service Not Available</option>');

        }
    });

    $("#register").submit(function (event) {

        $("#userEXT").html("");
        $("#emailEXT").html("");

        var username = $("#username").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var gender = $("#gender").val();
        var dob = $("#DOB").val();
        var email = $("#email").val();
        var pnumber = $("#pnumber").val();
        var password = $("#password").val();
        var cpassword = $("#cpassword").val();
        var country = $("#country").val();
        var city = $("#city").val();
        var area = $("#area").val();
        var address = $("#address").val();

        var fileInput = document.getElementById('profilepic');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (filePath != "") {
            if (!allowedExtensions.exec(filePath)) {
                //alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
                $("#profilepicHelp").html("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
                //fileInput.value = '';
                //return false;
                event.preventDefault();
            } else {

                $("#profilepicHelp").html("");

            }
        }

        console.log(username);
        console.log(firstname);
        console.log(lastname);
        console.log(gender);
        console.log(dob);
        console.log(email);
        console.log(pnumber);
        console.log(password);
        console.log(cpassword);

        if ((username == "") || (firstname == "") || (lastname == "") || (email == "") || (password == "")) {
            //alert("username, firstname, lastname, email, passeord can't be empty");
            console.log('inside if');

            if (username == "") {
                //alert("username empty.");
                $("#username").addClass("is-invalid");
                $("#usernameHelp").html("username can't be empty");

            } else if (username != "") {
                //alert("username OK.");
                $("#username").removeClass("is-invalid");
                $("#usernameHelp").html("");
            }

            if (firstname == "") {
                $("#firstname").addClass("is-invalid");
                $("#firstnameHelp").html("firstname can't be empty");

            } else if (firstname != "") {

                $("#firstname").removeClass("is-invalid");
                $("#firstnameHelp").html("");

            }

            if (lastname == "") {
                $("#lastname").addClass("is-invalid");
                $("#lastnameHelp").html("lastname can't be empty");

            } else if (lastname != "") {

                $("#lastname").removeClass("is-invalid");
                $("#lastnameHelp").html("");

            }

            if (email == "") {
                $("#email").addClass("is-invalid");
                $("#emailHelp").html("email can't be empty");

            } else if (firstname != "") {

                $("#email").removeClass("is-invalid");
                $("#emailHelp").html("");
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

            //alert("inside else");
            console.log("inside else");

            var hasNumber = /\d/;

            if (hasNumber.test(username)) {
                $("#username").addClass("is-invalid");
                $("#usernameHelp").html("username can't contain a number");
                event.preventDefault();

            } else if (!(hasNumber.test(username))) {

                $("#username").removeClass("is-invalid");
                $("#usernameHelp").html("");

            }

            if (hasNumber.test(firstname)) {
                //alert("firstName can't contain a number");
                $("#firstname").addClass("is-invalid");
                $("#firstnameHelp").html("firstName can't contain a number");
                event.preventDefault();

            } else if (!(hasNumber.test(firstname))) {

                $("#firstname").removeClass("is-invalid");
                $("#firstnameHelp").html("");

            }

            if (hasNumber.test(lastname)) {
                //alert("lastName can't contain a number");
                $("#lastname").addClass("is-invalid");
                $("#lastnameHelp").html("lastName can't contain a number");
                event.preventDefault();

            } else if (!(hasNumber.test(lastname))) {

                $("#lastname").removeClass("is-invalid");
                $("#lastnameHelp").html("");

            }

            if (username.length < 3) {
                //alert("username length should be at least 3");
                $("#username").addClass("is-invalid");
                $("#usernameHelp").html("username length should be at least 3");
                event.preventDefault();

            } else if (username.length >= 3) {

                $("#username").removeClass("is-invalid");
                $("#usernameHelp").html("");
            }

            if (firstname.length < 3) {
                //alert("firstname length should be at least 3");
                $("#firstname").addClass("is-invalid");
                $("#firstnameHelp").html("firstname length should be at least 3");
                event.preventDefault();

            } else if (firstname.length >= 3) {

                $("#firstname").removeClass("is-invalid");
                $("#firstnameHelp").html("");

            }

            if (lastname.length < 3) {
                //alert("lastname length should be at least 3");
                $("#lastname").addClass("is-invalid");
                $("#lastnameHelp").html("lastname length should be at least 3");
                event.preventDefault();

            } else if (lastname.length >= 3) {

                $("#lastname").removeClass("is-invalid");
                $("#lastnameHelp").html("");

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

            if (password.length < 3) {
                //alert("password is too short");
                $("#password").addClass("is-invalid");
                $("#passwordHelp").html("password is too short");
                event.preventDefault();

            } else if (password.length >= 3) {

                $("#password").removeClass("is-invalid");
                $("#passwordHelp").html("");

                if (password != cpassword) {
                    //alert("Password didn't match");
                    $("#password").addClass("is-invalid");
                    $("#cpassword").addClass("is-invalid");
                    $("#passwordHelp").html("Password didn't match");
                    $("#cpasswordHelp").html("Password didn't match");
                    event.preventDefault();

                } else if (password == cpassword) {

                    $("#password").removeClass("is-invalid");
                    $("#passwordHelp").html("");
                    $("#cpassword").removeClass("is-invalid");
                    $("#cpasswordHelp").html("");

                }

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
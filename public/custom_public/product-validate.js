$(document).ready(function () {

    $("#addcategory").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "addcategory") {
            $(this).val("nonewcategory");
            $("#categoryNew").removeAttr("readonly");

        } else if ($value == "nonewcategory") {

            $(this).val("addcategory");
            $("#categoryNew").attr("readonly", "readonly");
        }
    });

    $("#pfor").change(function (e) {

        var value = $("#pfor").val();
        console.log(value);
        // laravel ajax working 
        $.ajax({
            url: "/admin/addproduct/category",
            method: "get",
            data: {

                pfor: value
            },
            success: function (res) {

                Object.size = function (obj) {
                    var size = 0,
                        key;
                    for (key in obj) {
                        if (obj.hasOwnProperty(key)) {
                            size++;
                        }
                    }
                    return size;
                }

                var size = Object.size(res);

                console.log(size);
                console.log(res);
                var type = typeof (res);
                console.log(type);
                console.log(Array.isArray(type));

                $("#category").html("");
                var html = '';

                for (var i = 0; i < size; i++) {
                    html += `<option value="${res[i].category}">${res[i].category}</option>`;
                }

                $("#category").append(html);

                //window.location = "http://google.com";
                //window.location = "/cartlist";
            }

        });

    });

    $("#xs").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "XS") {
            $(this).val("none");
            $("#xsamount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("XS");
            $("#xsamount").attr("readonly", "readonly");
        }
    });

    $("#s").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "S") {
            $(this).val("none");
            $("#samount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("S");
            $("#samount").attr("readonly", "readonly");
        }
    });

    $("#m").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "M") {
            $(this).val("none");
            $("#mamount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("M");
            $("#mamount").attr("readonly", "readonly");
        }
    });

    $("#l").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "L") {
            $(this).val("none");
            $("#lamount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("L");
            $("#lamount").attr("readonly", "readonly");
        }
    });

    $("#xl").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "XL") {
            $(this).val("none");
            $("#xlamount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("XL");
            $("#xlamount").attr("readonly", "readonly");
        }
    });

    $("#xxl").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "XXL") {
            $(this).val("none");
            $("#xxlamount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("XXL");
            $("#xxlamount").attr("readonly", "readonly");
        }
    });

    $("#alls").click(function () {
        $value = $(this).val();
        console.log($value);
        if ($value == "ALLS") {
            $(this).val("none");
            $("#xs").attr("disabled", true);
            $("#s").attr("disabled", true);
            $("#m").attr("disabled", true);
            $("#l").attr("disabled", true);
            $("#xl").attr("disabled", true);
            $("#xxl").attr("disabled", true);
            $("#allsamount").removeAttr("readonly");

        } else if ($value == "none") {

            $(this).val("ALLS");
            $("#xs").attr("disabled", false);
            $("#s").attr("disabled", false);
            $("#m").attr("disabled", false);
            $("#l").attr("disabled", false);
            $("#xl").attr("disabled", false);
            $("#xxl").attr("disabled", false);
            $("#allsamount").attr("readonly", "readonly");
        }
    });

    $("#add-update-product").submit(function (event) {

        //$("#allsizes").find( ".text-danger" ).html("");
        //$("#productsizeHelp").html("");
        $("#itemEXT").html("");

        var pname = $("#pname").val();
        //var ptitle = $("#ptitle").val();
        var pfor = $("#pfor").val();
        var category = $("#category").val();
        var size = $("#size").val();
        var price = $("#price").val();
        var currency = $("#currency").val();
        var cost = $("#cost").val();
        var available = $("#available").val();
        var offer = $("#offer").val();

        console.log(price);
        console.log(cost);
        //console.log(ptitle);

        if(Number(cost)>Number(price))
        {
            alert("Your asking Price is lower than Manufecture Cost");
            event.preventDefault();
        }

        if ($("#allsizes input:checkbox:checked").length > 0) {
            //$("#productsizeHelp").html("");

            if ($('#xs').prop("checked") == true) {
                var quantity = $("#xsamount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }

            if ($('#s').prop("checked") == true) {
                var quantity = $("#samount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }

            if ($('#m').prop("checked") == true) {
                var quantity = $("#mamount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }

            if ($('#l').prop("checked") == true) {
                var quantity = $("#lamount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }

            if ($('#xl').prop("checked") == true) {
                var quantity = $("#xlamount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }

            if ($('#xxl').prop("checked") == true) {
                var quantity = $("#xxlamount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }

            if ($('#alls').prop("checked") == true) {
                var quantity = $("#allsamount").val();
                console.log(quantity);
                if (quantity == "") {
                    //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
                    $("#productsizeHelp").html("Quantity can't be empty for selected size!");
                    event.preventDefault();
                } else {
                    $("#productsizeHelp").html("");
                }
            }
        } else {
            $("#productsizeHelp").html("You have to check at least 1 Product Size and Set Quantity");
            event.preventDefault();
        }

        /*$('#allsizes input:checked').each(function() {
          var quantity = $(this).parents().parents().find( "input.form-control[type=number]" ).val();
          console.log(quantity);
          if(quantity=="")
          {
            //$(this).parents().parents().find( ".text-danger" ).html("Quantity can't be empty for selected size!");
            $("#productsizeHelp").html("Quantity can't be empty for selected size!");
            event.preventDefault();
          }
        });*/

        var fileInput = document.getElementById('productpics');
        var $fileUpload = $("#productpics");
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (filePath != "") {
            if (!allowedExtensions.exec(filePath)) {
                //alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
                $("#productpicsHelp").html("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
                //fileInput.value = '';
                //return false;
                event.preventDefault();

            } else {

                $("#productpicsHelp").html("");

            }

            if (parseInt($fileUpload.get(0).files.length) > 5) {

                //alert("You can only upload a maximum of 2 files");
                $("#productpicsHelp").html("maximum 5 files are allowed");
                event.preventDefault();

            } else {

                $("#productpicsHelp").html("");

            }

        }

        if (pname == "") {
            $("#pname").addClass("is-invalid");
            $("#pnameHelp").html("product name can't be empty");
            event.preventDefault();

        } else {

            var hasNumber = /\d/;
            $("#pname").removeClass("is-invalid");
            $("#pnameHelp").html("");

            if (hasNumber.test(pname)) {
                $("#pname").addClass("is-invalid");
                $("#pnameHelp").html("product name can't contain a number");
                event.preventDefault();

            } else if (!(hasNumber.test(pname))) {

                $("#pname").removeClass("is-invalid");
                $("#pnameHelp").html("");

            }

            if (pname.length < 3) {
                //alert("pname length should be at least 3");
                $("#pname").addClass("is-invalid");
                $("#pnameHelp").html("product name length should be at least 3");
                event.preventDefault();

            } else if (pname.length >= 3) {

                $("#pname").removeClass("is-invalid");
                $("#pnameHelp").html("");
            }

        }

    });

});
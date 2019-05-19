$(document).ready(function () {

    $("#search-user").click(function () {

        var search = $('#searchbox').val();
        search += "%";

        $.ajax({
            url: "/adminpage/searchuser",
            method: "post",
            data: {
                //name:$('#nam').val()
                typo: search
            },
            success: function (res) {

                $("#dataTable").html("<table><tr><th>All Operations</th><th>User Id</th><th>Username</th><th>User Firstname</th><th>User Lastname</th><th>User Email</th><th>User Password</th><th>User Gender</th><th>User Date of Birth</th><th>User Phone Number</th><th>User Country</th><th>User City</th><th>User Area</th><th>User Address</th><th>User Profile Pic</th><th>User Account Type</th></tr>");

                for (var i = 0; i < res.length; i++) {
                    $("#dataTable").append("<tr><td> <a class='btn btn-success btn-sm' href='/adminpage/updateuser/" + res[i].id + "'>Update</a> <form action='/adminpage/deleteuser/" + res[i].id + "' method='post' id='delete-product'><button type='button' class='btn btn-danger btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Delete</button><div class='dropdown-menu'><input class='dropdown-item' type='submit' value='Yes' name='yes'/><div class='dropdown-divider'></div><input class='dropdown-item' type='submit' value='No' name='no'/></div></form></td><td>" + res[i].id + "</td> <td>" + res[i].username + "</td> <td>" + res[i].firstname + "</td><td>" + res[i].lastname + "</td><td>" + res[i].email + "</td><td>" + res[i].password + "</td><td>" + res[i].gender + "</td><td>" + res[i].dob + "</td><td>" + res[i].phonenumber + "</td><td>" + res[i].country + "</td><td>" + res[i].city + "</td><td>" + res[i].area + "</td><td>" + res[i].address + "</td><td>" + res[i].profilepic + "</td><td>" + res[i].accounttype + "</td></tr>");
                }

                $("#dataTable").append("</table>");

                //document.write(res);
                console.log("success");
            }
        });
    });

    //$( "#nam" ).keypress(function() {
    $("#nam").keyup(function () {
        console.log("Handler for .keypress() called.");

        var search = $('#nam').val();
        search += "%";
        var title = $("input[name='title']").val();

        console.log(title);

        $.ajax({
            url: "/searchcloth",
            method: "get",
            data: {
                //name:$('#nam').val()
                typo: search,
                title: title
            },
            success: function (result) {

                console.log(search);
                console.log(result);

                var searchView = result.searchview;

                console.log(result.searchview);

                var oldView = result.oldview;

                if (search == "%") {
                    $('.row').html(result.oldview);
                } else {
                    $('.row').html(result.searchview);
                }

                //document.write(res);
                console.log("success");


                //re writing addtocart.js functionality though after ajax old functionality doesn't work!!!

                var $star_rating = $('.star-rating .fa');

                var SetAllRatingStar = function () {
                    return $star_rating.each(function () {

                        if (parseInt($(this).siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                            return $(this).removeClass('fa-star-o').addClass('fa-star');
                        } else {
                            return $(this).removeClass('fa-star').addClass('fa-star-o');
                        }
                    });

                };

                SetAllRatingStar();

                //var arrayCart = new Array();

                $(document).ready(function () {

                    var arrayCart = [];
                    var totalitem = 0;
                    var qntty;
                    console.log(arrayCart.length);

                    $star_rating.on('click', function () {

                        var $product_rating;

                        var SetRatingStar = function () {
                            //return $star_rating.each(function() {
                            return $product_rating.each(function () {
                                if (parseInt($product_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                                } else {
                                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                                }
                            });
                        };

                        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
                        var itemDiv = $(this).parents().parents().parents().parents().parents().attr('id');
                        console.log(itemDiv);
                        $product_rating = $("#" + itemDiv).find('.star-rating .fa');

                        var rating = $(this).data('rating');
                        var uid = $(".row > input[name='uid']").val();
                        var user = $(".row > input[name='user']").val();
                        var pid = $("#" + itemDiv + " > input[name='pid']").val();
                        var pname = $("#" + itemDiv + " > input[name='pname']").val();

                        // laravel ajax working
                        $.ajax({
                            url: "/product/givarating",
                            method: "get",
                            data: {
                                productid: pid,
                                productname: pname,
                                rating: rating
                            },
                            success: function (res) {

                                console.log("Give Rating:");
                                console.log(res);
                                //window.location.reload();
                                //window.location = "http://google.com";
                                //window.location = "/cartlist";	
                            }

                        });

                        return SetRatingStar();

                    });

                    $('[data-toggle="tooltip"]').tooltip();

                    $('.love').on('click', function () {
                        var itemDiv = $(this).parents().parents().parents().attr('id');
                        console.log(itemDiv);

                        var uid = $(".row > input[name='uid']").val();
                        var user = $(".row > input[name='user']").val();
                        var pid = $("#" + itemDiv + " > input[name='pid']").val();

                        console.log("uid " + uid);
                        console.log("pid " + pid);
                        console.log("user " + user);


                        $("#" + itemDiv).find(".mzs-atf").toggleClass('fa-heart-o fa-heart');

                        if ($("#" + itemDiv).find(".mzs-atf").hasClass("fa-heart")) {
                            $("#" + itemDiv).find("[data-toggle='tooltip']").tooltip('hide').attr("data-original-title", "Added as Favorite").tooltip('show');

                        } else {

                            $("#" + itemDiv).find("[data-toggle='tooltip']").tooltip('hide').attr("data-original-title", "Add to Favorite").tooltip('show');

                        }

                        // laravel ajax working 
                        $.ajax({
                            url: "/product/addtofavourite",
                            method: "get",
                            data: {
                                productid: pid
                            },
                            success: function (res) {

                                console.log("ADD TO FAVORITE:");
                                console.log(res);
                                //window.location = "http://google.com";
                                //window.location = "/cartlist";	
                            }

                        });


                    });

                    $(".allsizes").change(function (e) {

                        var amount = $(this).val();
                        var sizeType = $(this).find('option:selected').text();
                        console.log(sizeType);
                        console.log(amount);
                        console.log($(this).find("input[name='quantity']"));
                        console.log($(this).parents().parents().parents().attr('id'));
                        var itemDiv = $(this).parents().parents().parents().attr('id');
                        $("#" + itemDiv + " > input[name='qavailable']").val(sizeType);

                        //itemDiv.find( "input[name='quantity']" );
                        $("#" + itemDiv).find("input[name='quantity']").attr({
                            "max": amount
                        });


                    });

                    $(".mzs-atc").on('click', function (e) {

                        //var arrayCart = [];

                        console.log($(this).parents().parents().parents().attr('id'));
                        var parentDivId = (e.target).parentNode.parentNode.parentNode.id;
                        console.log(parentDivId);

                        var selectedsize = $("#" + parentDivId).find('option:selected').text();
                        console.log(selectedsize);
                        if (selectedsize == "Size") {
                            alert("Select a Size");
                        } else {
                            var pid = $("#" + parentDivId + " > input[name='pid']").val();
                            var pname = $("#" + parentDivId + " > input[name='pname']").val();
                            //var ptitle = $("#" + parentDivId + " > input[name='ptitle']").val();
                            var category = $("#" + parentDivId + " > input[name='category']").val();
                            var pfor = $("#" + parentDivId + " > input[name='pfor']").val();
                            var size = $("#" + parentDivId + " > input[name='size']").val();
                            var available = $("#" + parentDivId + " > input[name='available']").val();
                            var xsavailable = $("#" + parentDivId + " > input[name='xsavailable']").val();
                            var savailable = $("#" + parentDivId + " > input[name='savailable']").val();
                            var mavailable = $("#" + parentDivId + " > input[name='mavailable']").val();
                            var lavailable = $("#" + parentDivId + " > input[name='lavailable']").val();
                            var xlavailable = $("#" + parentDivId + " > input[name='xlavailable']").val();
                            var xxlavailable = $("#" + parentDivId + " > input[name='xxlavailable']").val();
                            //var rating = $("#" + parentDivId + " > input[name='rating']").val();
                            var price = $("#" + parentDivId + " > input[name='price']").val();
                            var currency = $("#" + parentDivId + " > input[name='currency']").val();
                            var cost = $("#" + parentDivId + " > input[name='cost']").val();
                            var offer = $("#" + parentDivId + " > input[name='offer']").val();
                            var quantity = $("#" + parentDivId).find("input[name='quantity']").val();
                            var quantityFor = $("#" + parentDivId + " > input[name='qavailable']").val();
                            var avmax = $("#" + parentDivId).find("input[name='quantity']").attr("max");
                            var sizeAmount = $("#" + parentDivId).find('option:selected').val();

                            console.log(avmax);
                            console.log(quantity);
                            console.log("QFor : " + quantityFor);
                            console.log("SizeAmount : " + sizeAmount);

                            var sub = Number(avmax);
                            sub -= Number(quantity);
                            mini = 1;

                            if (sub < 1) {
                                sub = 0;
                                mini = 0;
                            }

                            $("#" + parentDivId).find("input[name='quantity']").attr({
                                "max": sub, // substitute your own
                                "min": mini // values (or variables) here
                            });

                            $("#" + parentDivId).find('option:selected').val(sub);

                            totalitem += Number(quantity);
                            $('#cartitem').html(totalitem);
                            //console.log(cost);
                            //console.log(available);

                            var cartObj = {};
                            cartObj.pid = pid;
                            cartObj.pname = pname;
                            cartObj.pfor = pfor;
                            cartObj.category = category;
                            cartObj.size = size;
                            cartObj.available = available;
                            cartObj.xsavailable = xsavailable;
                            cartObj.savailable = savailable;
                            cartObj.mavailable = mavailable;
                            cartObj.lavailable = lavailable;
                            cartObj.xlavailable = xlavailable;
                            cartObj.xxlavailable = xxlavailable;
                            cartObj.avmax = sub;
                            cartObj.quantity = Number(quantity);
                            cartObj.quantityFor = quantityFor;
                            cartObj.price = price;
                            cartObj.cost = cost;
                            cartObj.currency = currency;
                            cartObj.offer = offer;

                            if (sub < Number(quantity)) {
                                $("#" + parentDivId).find("input[name='quantity']").val(sub);
                            }

                            var numb = Number(cartObj.quantity);
                            var prc = Number(cartObj.price);
                            var totalprc = numb * prc;

                            cartObj.total = totalprc;

                            console.log(cartObj);
                            qntty = Number(quantity);

                            if (arrayCart.length == 0) {
                                arrayCart.push(cartObj);
                                //$.cookie("products", JSON.stringify(arrayCart));

                            } else {

                                var found = false;

                                for (var i = 0; i < arrayCart.length; i++) {
                                    if (cartObj.pid == arrayCart[i].pid) {
                                        if (cartObj.quantityFor == arrayCart[i].quantityFor) {
                                            arrayCart[i].quantity += Number(cartObj.quantity);
                                            numb = Number(arrayCart[i].quantity);
                                            prc = Number(arrayCart[i].price);
                                            totalprc = numb * prc;
                                            arrayCart[i].total = totalprc;
                                            //$.cookie("products", JSON.stringify(arrayCart));
                                            found = true;
                                            break;
                                        }
                                    }

                                }

                                if (found == false) {
                                    arrayCart.push(cartObj);
                                }

                            }

                            console.log("arrayCart:");
                            console.log(arrayCart);

                            // laravel ajax working 
                            $.ajax({
                                url: "/addtocart",
                                method: "get",
                                data: {

                                    cartitems: arrayCart
                                },
                                success: function (res) {

                                    console.log("res cart session:");
                                    console.log(res);
                                    //window.location = "http://google.com";
                                    //window.location = "/cartlist";	
                                }

                            });

                        }

                    });

                    /*$("#cart-btn").click(function(e){

                    	console.log("Working");
                    	//var products = $.parseJSON($.cookie("products"));
                    	//console.log(products);
                    		$.ajax({
                    			url:"/cartlist/checkout",
                    			method:"post",
                    			data:{
                    				//name:$('#nam').val()
                    				cartitems:"ok"
                    			},
                    			success:function(res){

                    				//window.location = "http://google.com";
                    				window.location = "/cartlist";
                    				
                    			}
                    		});
	
                    });	*/

                });


            }

        });

    });


});
$(document).ready(function () {

    var newQuantity = [];

    $("input[name='quantity']").keypress(function (event) {
        event.preventDefault();
    });

    $("#cng_currency").change(function (e) {

        var totalprice = $("input[name='totalprice']").val();
        var currency = $(this).val();
        var convertedPrice;
        if ((currency == "Rupee") || (currency == "RS.")) {
            convertedPrice = totalprice / 1.5;

        } else if ((currency == "Taka") || (currency == "TK.")) {
            convertedPrice = totalprice;

        } else if (currency == "$") {
            convertedPrice = totalprice / 82.71;

        } else if (currency == "Euro") {
            convertedPrice = totalprice / 94.91;

        }
        convertedPrice = parseFloat(convertedPrice);
        convertedPrice = convertedPrice.toFixed(2);
        $("#totalprice").html("<strong> Over all Price : " + convertedPrice + "</strong>");
        console.log("total price : " + totalprice);

    });

    $("input[name='quantity']").change(function (e) {

        //1euro = 94.91bdt, 1.13$, 81.52inr
        //1$ = 82.71bdt, 0.88euro, 71.90inr
        var quantity = $(this).val();
        console.log(quantity);
        var parentDivId = (e.target).parentNode.parentNode.id;
        console.log(parentDivId);
        var pid = $("#" + parentDivId + " > input[name='pid']").val();
        var price = $("#" + parentDivId + " > input[name='price']").val();
        var squantity = $("#" + parentDivId + " > input[name='squantity']").val();
        var quantityFor = $("#" + parentDivId + " > input[name='quantityFor']").val();
        $("#" + parentDivId + " > input[name='squantity']").val(quantity);
        console.log(squantity);
        var totalprice = $("input[name='totalprice']").val();
        var currency = $("#" + parentDivId + " > input[name='currency']").val();
        console.log(totalprice);
        console.log(price);
        console.log(currency);
        var column = $("#" + parentDivId).find(".price");
        console.log(column);
        var total = Number(quantity) * Number(price);
        column.html(total + " " + currency);
        subprice = Number(squantity) * Number(price);
        console.log("subprice : " + subprice);
        if ((currency == "Rupee") || (currency == "RS.")) {
            totalprice -= subprice * 1.5;
            totalprice += total * 1.5;
        } else if ((currency == "Taka") || (currency == "TK.")) {
            totalprice -= subprice;
            totalprice += total;
        } else if (currency == "$") {
            totalprice -= subprice * 82.71;
            totalprice += total * 82.71;
        } else if (currency == "Euro") {
            totalprice -= subprice * 94.91;
            totalprice += total * 94.91;
        }
        totalprice = totalprice.toFixed(2);
        $("input[name='totalprice']").val(totalprice);
        $("#totalprice").html("<strong> Over all Price : " + totalprice + "</strong>");

        var cartObj = {};
        cartObj.pid = Number(pid);
        cartObj.quantity = Number(quantity);
        cartObj.price = Number(price);
        cartObj.quantityFor = quantityFor;

        var totalprc = Number(cartObj.quantity) * Number(cartObj.price);

        cartObj.total = totalprc;

        if (newQuantity.length == 0) {
            newQuantity.push(cartObj);
            //$.cookie("products", JSON.stringify(newQuantity));

        } else {

            var found = false;

            for (var i = 0; i < newQuantity.length; i++) {
                if (cartObj.pid == newQuantity[i].pid) {
                    if (cartObj.quantityFor == newQuantity[i].quantityFor) {
                        newQuantity[i].quantity = Number(cartObj.quantity);
                        totalprc = Number(newQuantity[i].quantity) * Number(newQuantity[i].price);
                        newQuantity[i].total = totalprc;
                        //$.cookie("products", JSON.stringify(newQuantity));
                        found = true;
                        break;
                    }
                }

            }

            if (found == false) {
                newQuantity.push(cartObj);
            }

        }
        console.log("newQuantity q click :");
        console.log(newQuantity);

        var pmethod = $('#purchasemethod').val();
        var address = $('#address').val();

        //console.log("csrf :" + csrf);
        console.log("pmethod :" + pmethod);
        console.log("address :" + address);

        $('#newQuantity').val(JSON.stringify(newQuantity));

        var nQ = $('#newQuantity').val();
        console.log("nQ :");
        console.log(nQ);

    });

    /*$("#checkout").submit(function (event) {

        console.log("checkout clicked");

        var pmethod = $('#purchasemethod').val();
        var address = $('#address').val();

        //console.log("csrf :" + csrf);
        console.log("pmethod :" + pmethod);

    });*/

});
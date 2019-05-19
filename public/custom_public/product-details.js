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

$(document).ready(function () {

    console.log("From Product Details : working!");

    //$star_rating.on('click', function() {

    $star_rating.on('click', function () {

        var $cmnt_rating = $(this).parents().find('.fa');

        var SetRatingStar = function () {
            //return $star_rating.each(function() {
            return $cmnt_rating.each(function () {

                if (parseInt($cmnt_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                }

            });

        };

        $cmnt_rating.siblings('input.rating-value').val($(this).data('rating'));

        var rating = $(this).data('rating');
        //$("#cmnt_rate").val(rating);
        $(this).parent().parent().parent().find("input[name='cmnt_rating']").val(rating);

        return SetRatingStar();

    });

    $(".mzs-reply").click(function (event) {
        $(this).parents().siblings(".mzs-replybox").toggle("slow", function () {
            // Animation complete.
        });
    });

    $(".mzs-edit").click(function (event) {

        var cmnt_text = $(this).parents().siblings(".mzs-edit_text").text();

        $(this).parents().siblings(".mzs-edit_text").toggle("slow", function () {
            // Animation complete.
        });

        $(this).parents().siblings(".mzs-editbox").find(".mzs-cmnt_text").text(cmnt_text);

        $(this).parents().siblings(".mzs-editbox").toggle("slow", function () {
            // Animation complete.
        });

    });

    $(".mzs-edit-nested").click(function (event) {

        var cmnt_text = $(this).parents().siblings(".mzs-edit_text-nested").text();

        console.log("cmnt_text :" + cmnt_text);

        $(this).parents().siblings(".mzs-edit_text-nested").toggle("slow", function () {
            // Animation complete.
        });

        $(this).parents().siblings(".mzs-editbox-nested").find(".mzs-cmnt_text").text(cmnt_text);

        $(this).parents().siblings(".mzs-editbox-nested").toggle("slow", function () {
            // Animation complete.
        });

    });

});
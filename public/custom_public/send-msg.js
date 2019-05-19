$(document).ready(function () {

    console.log("Msg send .js working");
    var scrolled = false;

    function updateScroll() {

        var element = document.querySelector('.msg_history');
        console.log("ST : " + element.scrollTop);
        console.log("SH : " + element.scrollHeight);
        console.log("ST - SH : " + (element.scrollHeight - element.clientHeight));
        if (!scrolled) {

            //element.scrollTop = element.scrollHeight;
            element.scrollTop = element.scrollHeight - element.clientHeight;
        }

        if (element.scrollTop == element.scrollHeight - element.clientHeight) {
            scrolled = false;
        }

    }

    $(".msg_history").on('scroll', function () {

        scrolled = true;

    });

    setInterval(function () {

        console.log("Msg auto load after 1 sec");

        //var csrf = $('meta[name="csrf-token"]').attr('content');
        var csrf = $('#csrf').val();
        var sendto = $("#sendto").val();

        $.ajax({
            url: "/sendmessage",
            method: "post",
            data: {
                sendto: sendto,
                _token: csrf
            },
            success: function (result) {

                console.log(result);
                var searchView = result.view;
                $('.msg_history').html(result.view);
                console.log("success");

                //var messageBody = document.querySelector('.msg_history');
                //messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;

                updateScroll();

            }

        });

    }, 1000);

    $("#send-msg").click(function () {

        console.log("Msg send clicked");

        //var csrf = $('meta[name="csrf-token"]').attr('content');
        var csrf = $('#csrf').val();
        var message = $('#message').val();
        var sendto = $("#sendto").val();

        console.log(csrf);
        if (message != "") {
            $.ajax({
                url: "/sendmessage",
                method: "post",
                data: {
                    message: message,
                    sendto: sendto,
                    _token: csrf
                },
                success: function (result) {

                    console.log(result);
                    var searchView = result.view;
                    $('.msg_history').html(result.view);
                    console.log("success");
                    $('#message').val("");

                }

            });
        }

    });

});
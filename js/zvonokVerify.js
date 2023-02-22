$(function() {
    $('.error').hide();
    $(".buttonQuery").click(function() {
        // validate and process form here

        $('.error').hide();

        let FIO = $("input#FIO").val();
        if (FIO === "") {
            $("label#FIO_error").show();
            $("input#FIO").focus();
            return false;
        }

        let telephone = $("input#telephone").val();
        if (telephone === "") {
            $("label#telephone_error").show();
            $("input#telephone").focus();
            return false;
        }
        else if (telephone.includes('+') === false) {
            $("label#telephone_error").show();
            $("input#telephone").focus();
            return false;
        }
        else if (telephone.length !== 12) {
            $("label#telephone_error_length").show();
            $("input#telephone").focus();
            return false;
        }


        let dataString = 'FIO='+ FIO + '&telephone=' + telephone;
        //alert (dataString);return false;
        $.ajax({
            type: "POST",
            url: "zvonokRedirect.php",
            data: dataString,
            success: function() {
                $('#contact_form').html("<div id='message'></div>");
                $('#message').html("<h2>Благодарим, ожидайте звонок от нас!</h2>");
            }
        });
        return false;

    });
});
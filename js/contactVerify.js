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


        let text = $("input#text").val();
        if (text === "") {
            $("label#text_error").show();
            $("input#text").focus();
            return false;
        }


        let dataString = 'FIO='+ FIO + '&telephone=' + telephone + '&text=' + text;
        //alert (dataString);return false;
        $.ajax({
            type: "POST",
            url: "contactsRedirect.php",
            data: dataString,
            success: function() {
                $('#contact_form').html("<div id='message'></div>");
                $('#message').html("<h3>Вы задали вопрос!</h3>");
            }
        });
        return false;

    });
});
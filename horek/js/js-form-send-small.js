$(document).ready(function () {
    $("#send1").click(function () {
        var regVr22 = "<div><img style='margin-bottom:-4px;' src='load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Сообщение обрабатывается...</span></div><br />";
        $("#loadBar1").html(regVr22).show();
        var posName = $("#posName1").val();
        var posPhone = $("#posPhone1").val();
        $.ajax({
            type: "POST",
            url: "send(2).php",
            data: {
                "posName": posName,
                "posPhone": posPhone
            },
            cache: false,
            success: function (response) {
                var messageResp = "<p style='font-family:Verdana; font-size:11px; color:green; border:1px solid #00CC00; padding:10px; margin:20px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background-color:#fff;'>Спасибо, <strong>";
                var resultStat = "!</strong> Ваше сообщение отправлено!</p>";
                var oll = (messageResp + posName + resultStat);
                if (response == 1) {
                    $("#loadBar1").html(oll).fadeIn(3000);
                    $("#posName1").val("");
                    $("#posPhone1").val("");
                } else {
                    $("#loadBar1").html(response).fadeIn(300);
                }
            }
        });
        return false;
    });
});

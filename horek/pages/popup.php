<!DOCTYPE html>
<head>
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="../css/popup.css">
</head>

<body>
    <form class="Form-1" id="Form-1">
        <h4>Связаться с нами:</h4>
        <img src="../screenshots/blackmetal-form-big.png" aly="">
        <!-- Прогрессбар -->
        <div align="center" id="loadBar"></div>
        <!-- Форма обратной связи -->
        <form id="cForm2" class="Form-2" action="#" method="post">
            <label>Ваше имя:</label>
            <input value="" id="posName" type="text" placeholder="Имя, фамилия" />
            <label>Ваш E-mail:</label>
            <input value="" id="posEmail" type="email" placeholder="Адрес електронной почты" />
            <label>Тема:</label>
            <input value="Письмо с сайта" id="posSub" type="text" />
            <label>Ваше сообщение:</label>
            <textarea id="posText" placeholder="Текст сообщения..."></textarea>
            <!-- Княпки -->
            <input type="submit" id="send" value="Отправить">
            <input type="reset" id="clear" value="Очистить">
        </form>
    </form>
</body>

</html>

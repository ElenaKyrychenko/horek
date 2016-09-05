<?php
if (!isset($_GET['page'])) {
$page = 'main';
} else {
$page = addslashes(strip_tags(trim($_GET['page'])));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Центр юридической помощи "КОНСУЛ"</title>
    <!--  Информация для поисковых систем  -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="ru" />
    <meta name="robots" content="index, nofollow" />
<!--    <meta name="author" content="Наталья Талагаева" />-->
    <meta name="copyright" content="Все права принадлежат центру юридической помощи 'КОНСУЛ' "/>
    <meta name="keywords" content="центр юридической помощи, юридическая поддержка, решение юридических вопросов, юрист, юрист в Тюмени, услуги для бизнеса, услуги лицензирования, юридическое сопровождение" />
    <meta name="description" lang="ru" content="Центр юридической помощи КОНСУЛ поможет Вам в решении проблем любой сложности. Имеем широкий спектр услуг. ✓высококвалифицированные специалисты ✓индивидуальный подход " />
    <!-- Внешние скрипты -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/popup(2).css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
     <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Fancybox -->
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css">

    <!-- Отправка формы обратной связи -->
    <script type="text/javascript" src="/js/js-form-send.js"></script>
    <!-- Отправка small-callback-формы -->
    <script type="text/javascript" src="/js/js-form-send-small.js"></script>

    <!-- Скрипт управления попап окна -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("a.popup").fancybox({
                autoSize: true,
                padding: 0,
                margin: 5,
                titleShow: false
            });
        });
    </script>
    <script src="js/readmore.js"></script>
</head>

<body>
   <div class="all">
       <div class="contain">
            <header>
                <div id="header">
                    <?php
                        include('/pages/header.php');
                    ?>
                </div>
            </header>
            <main>
                <div id="content">
                    <?php
                        include('/pages/'.$page.'.php');
                    ?>
                </div>
            </main>
        <!--
            <div id="recall">
                <a class="popup" href="#popup"><img src="screenshots/call-1436744_640.png" alt="recall"></a>
                            <div id="popup" style="display: none;">
                                //<?php
                                  //  include('/pages/popup_min.php');
                               // ?>
                            </div>
            </div>
        -->
            <footer>
                <div id="footer">
                    <?php
                            include('/pages/footer.php');
                    ?>
                </div>
            </footer>

            <!-- Popup форма -->
            <div style="display: none;">
                <?php
                    include('/pages/popup.php');
                ?>
            </div>
        </div>
    </div>
</body>
     <script>
        $('article').readmore({
			maxHeight: 100,
			moreLink: '<a href="#">Детальніше</a>',
			lessLink: '<a href="#">Сховати</a>'
		});
    </script>
</html>

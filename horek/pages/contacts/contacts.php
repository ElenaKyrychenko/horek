<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/pages/pages.css">
</head>

<body>
    <main>
        <section class="section_content">
            <div class="container contact_us">

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="footer-inform on-contact-page">
                       <h3>Наши контакты</h3>
                       <img src="../../screenshots/justice-423446_640.jpg" alt="" height="150px;">
                       <div class="all_cont">
                            <div class="contacts-main">Адрес:
                                <br> Тел:
                                <br> Email:</div>
                            <div class="contacts-information">г. Тюмень, ул. Республики, д. 81, оф. 304/3
                                <br> 8(3452)95-81-70, 8-922-487-7589
                                <br> consultant_72@mail.ru</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 yandex_map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=nmKesvrpLVdBPUztjNCWG7rDp_5m7rlK&width=100%&height=350&lang=ru_UA&sourceType=constructor&scroll=true"></script>
                </div>
            </div>
            <div class="container form">
                <?php
                    include('/pages/popup.php');
                ?>
            </div>
        </section>
    </main>
</body>

</html>

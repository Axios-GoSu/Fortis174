<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Спасибо</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/simplebox.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md m-0 sticky-top">
            <div class="container">
                <a class="navbar-brand mt-2 h1" href="http://fortis174.ru/">
                    Учебный центр<br>
                    "Профессионал"
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scrollto" href="/uslugi-metalloobrabotki">УСЛУГИ МЕТАЛЛООБРАБОТКИ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollto" href="/internet-magazin">ИНТЕРНЕТ-МАГАЗИН</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollto" href="/vakansii">ВАКАНСИИ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollto" href="#nashi-kontakty">НАШИ КОНТАКТЫ</a>
                        </li>
                    </ul>
                    <span class="navbar-text mobile mt-2">
                        <p>
                            <a href="mailto:zakaz_fortis174@list.ru">zakaz_fortis174@list.ru</a>
                            <br><a href="tel:89624885155">+7-962-488-51-55</a>
                            <br><a href="tel:89514828639">+7-951-482-86-39</a>
                            <a href="" data-toggle="modal" data-target="#callback">заказать звонок</a>
                        </p>
                    </span>
                </div>
                <span class="navbar-text desktop mt-2">
                    8 (922) 639-42-65<br>
                    <p class="text-right"><a href="" data-toggle="modal" data-target="#callback">Заказать звонок</a></p>
                </span>
            </div>
        </nav>
        <br><br><br>
    </header>
    <div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-border">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalCenterTitle">
                            Напишите свой номер телефона и имя <br> менеджер перезвонит вам
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="send.php" method="post" onsubmit="return validateForm()">
                            <input type="hidden" name="forma" value="ЗАКАЗАТЬ ЗВОНОК">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Введите ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Введите ваш телефон" maxlength="11" required>
                                <div id="phone-error" style="color: red;"></div>
                            </div>
                            <!-- Чекбокс для согласия -->
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="agreement" required>
                                <label class="form-check-label" for="agreement">
                                    Нажимая на кнопку, вы даете согласие на обработку <a href="http://listspec.ru/privacy.html">персональных данных</a>
                                </label>
                                <div class="invalid-feedback" id="agreement-error" style="display:none; color: red;">
                                    Заполните это поле
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block bold">ЗАКАЗАТЬ ЗВОНОК</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function validateForm() {
        var phoneInput = document.getElementById('phone').value;
        var phoneError = document.getElementById('phone-error');
        var agreementCheckbox = document.getElementById('agreement');
        var agreementError = document.getElementById('agreement-error');
        phoneError.innerHTML = '';
        agreementError.innerHTML = '';
        // Проверка номера телефона
        if (!/^\d+$/.test(phoneInput)) {
            phoneError.innerHTML = 'В данном поле необходимо только цифры вводить';
            return false;
        }
        if (phoneInput.length < 10) {
            phoneError.innerHTML = 'Вы ввели недостаточное количество цифр для номера телефона';
            return false;
        }
        // Проверка чекбокса
        if (!agreementCheckbox.checked) {
            agreementError.style.display = 'block';
            return false;
        }
        return true;
    }
</script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/simplebox.js"></script>
    <script src="js/perehod.js"></script>
    <script type="text/javascript" src="js/simplebox_util.js"></script>
    <script type="text/javascript">
        (function(){
            var boxes=[],els,i,l;
            if(document.querySelectorAll){
                els=document.querySelectorAll('a[rel=simplebox]');
                Box.getStyles('simplebox_css','css/simplebox.css');
                Box.getScripts('simplebox_js','js/simplebox.js',function(){
                    simplebox.init();
                    for(i=0,l=els.length;i<l;++i)
                        simplebox.start(els[i]);
                    simplebox.start('a[rel=simplebox_group]');
                });
            }
        })();
    </script>
    <script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/55b06e2098ae55b374c740edb807c6b8/connect" id="check-code-pozvonim" charset="UTF-8"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(98921394, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/98921394" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <div class="text-center" style='display: flex; flex-direction: column; flex-wrap: nowrap; align-content: space-around; justify-content: flex-start; align-items: center;' class='wrap_block_success'>
        <img src='data:image/jpeg;base64,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'>
        <div class='block_success' style='text-weight: bold;'>
            <h2>Ваш заказ принят!</h2>
            <p>В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p>
            <p>Спасибо что выбрали нас!</p>
        </div>
        <div style='padding-top: 2em;'>
            <a href="http://listspec.ru/">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
        </div>
    </div>
</body>
</html>
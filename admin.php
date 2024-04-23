<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="https://pamrog.by/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://pamrog.by/favicon.ico" type="image/x-icon">
    <title>РОГАЧЕВ ПАМЯТНИКИ <М>
    </title>
    <meta name="description" content="Изготовление любых памятников. Полное благоустройство могил в Рогачеве, Жлобине, Светлогорске.">
    <meta name="keywords" content="Профессиональное оформление памятников. Индивидуальный подход к каждому клиенту.">
    <link rel='stylesheet' href='style.css'>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97104202, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/97104202" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QVWDMXC0QS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QVWDMXC0QS');
    </script>
</head>

<body>
    <header>
        <div class='container'>
            <div class='header-wrap'>
                <a href='index.php'><img class='logo-img' src='./assets/images/logo1.png' title='Магазин памятники в Рогачеве' alt='Магазин памятники в Рогачеве'></a>
                <div class='invk'>
                    <a href='https://www.instagram.com/rogachev_pamyatniki/' class='in'>
                        <img src='./assets/images/in.svg' title='Магазин памятники в Рогачеве в инстаграмм' alt='Интернет магазин Sport Ground в in' />
                    </a>
                    <a href='viber://chat?number=%2B375296218749' class='viber'>
                        <img src='./assets/images/viber.svg' title='Магазин памятники в Рогачеве в вайбере' alt='Интернет магазин Sport Ground в vk' />
                    </a>
                    <a href='https://t.me/pam_max' class='tg'>
                        <img src='./assets/images/tg.svg' title='Магазин памятники в Рогачеве в телеграмм' alt='Написать в телеграмм' />
                    </a>
                </div>
                <div class='cart-super-Btn'>
                    <div><img class='header-zn' src='./assets/images/head-icon.png' alt=''></div>
                    <div class='header-adres'>
                        <p>г. Рогачёв, ул. Богатырева, </p>
                        <p>завод 'Диапроектор' мини-рынок</p>
                        <p> 'Восточный' пав 125.</p>
                    </div>
                    <div>
                        <img class='header-zn' src='./assets/images/clock.png' alt=''>
                    </div>
                    <div class='header-adres'>
                        <p>Время приёма заказов: Вт-Пт: 10:00-16:00</p>
                        <p>Сб-Вс: 10:00 - 15:00</p>
                        <p>Выходной: понедельник</p>
                    </div>
                    <div>
                        <img class='header-zn' src='./assets/images/phone.png' alt=''>
                    </div>
                    <div class='header-adres'>
                        <a class='header-adres' href=”tel:+375296218749”>+375 ( 29 ) 621-87-49</a><br>Онлайн консультация:<br> с 9:00 до 22:00
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <h1 id="zag_comment">Кабинет администратора сайта.</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="lk">
            <h3>Введите имя пользователя и пароль</h3>
            <h5>Введите имя </h5>
            <h5> <input type="text" id="useradm" name="useradm"> </h5>
            <h5>Введите пароль </h5>
            <h5> <input type="password" id="paswadm" name="paswadm"> </h5>
            <input type="submit" class="b1" value="Войти">
        </form>
        <?php
        if (!empty($_POST['useradm'])) {
            $nn = 0;
            include('configinc.php');
            $useradm = '';
            $paswadm = '';
            $soob = '';
            $user = '';
            $pas = '';
            $useradm = $_POST['useradm'];
            $paswadm = $_POST['paswadm'];
            $useradm = md5($useradm . 16);
            $paswadm = md5($paswadm . 16);
            //pam2024
            include('configinc.php');
            $result = mysqli_query($db, 'SELECT `user`,`pasw` FROM `user` ');
            while ($row = mysqli_fetch_array($result)) {
                $user = $row['user'];
                $pas = $row['pasw'];
            }
            if ((trim($useradm) == trim($user)) and (substr($paswadm, 0, 16) == substr($pas, 0, 16))) {
                // echo '<h6 class="main-title">Каталог покупок товаров в интернет магазине</h6>';
                echo '<style>#lk {display: none}</style>';
                $q = mysqli_query($db, "SELECT `id`,`fio`,`tel`,`comment`, `datazv`  FROM `zayav` ");
                echo '<table class="table" id="table2">';
                echo '<tr class="align-middle">';
                echo '<td>N</td><td>ФИО</td><td>Номер телефона</td><td>Сообщение</td>';
                echo '</tr>';
                echo '<tr>';
                while ($itog = mysqli_fetch_assoc($q)) {
                    $nn++;
                    $nomerzak = $itog["id"];
                    $fio = $itog["fio"];
                    $tel = $itog["tel"];
                    $comment = $itog["comment"];
                    $datazv = $itog["datazv"];
                    echo '<td>' . $nn . '</td><td>' . $fio . '</td><td>' . $tel . '</td><td>' . $comment . '</td><td>' . $datazv . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                mysqli_free_result($result);
                mysqli_close($db);
            }
        }
        ?>
    </section>
    <footer>
        <img src='./assets/images/up.svg' alt='up' class='pageup' title='Рageup'>
        <div class='container'>
            <ul class='footer-ul'>
                <li><a class='footer-link' href='#'>
                        © Памятники Рогачев, <p>2002 - <?php echo date('Y');
                                                        ?>.</p></a></li>
            </ul>
        </div>
    </footer>
    <script defer type='module' src='./js/scrviv.js'></script>
    <script defer type='module' src='./js/scrvivg.js'></script>
    <script defer src='./js/script.js'></script>
</body>

</html>
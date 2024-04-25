<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="https://pamrog.by/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://pamrog.by/favicon.ico" type="image/x-icon">
    <title>Изготовление любых памятников в Рогачеве. Благоустройство могил.</title>
    <meta name="description" content="Изготовление любых памятников в Рогачеве, Жлобине, Светлогорске. Полное благоустройство могил.">
    <meta name="keywords" content="Профессиональное оформление памятников в Рогачеве, Жлобине, Светлогорске. Индивидуальный подход к каждому клиенту.">
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
        <h1 id="zag_comment">Отзывы и комментарии.</h1>
        <form class='comment' action='otzkom.php' method='post'>
            <input class='form-control' type='text' name='fio' placeholder='Укажите ФИО' required pattern='[A-Za-zА-Яа-я .]*'>
            <input class='form-control' type='text' name='tel' placeholder='Укажите номер телефона(Не публикуется)' required>
            <textarea class='form-control' rows='3' cols='10' name='comment' placeholder='Напишите ваше сообщение сюда...'></textarea>
            <p class="personal-data">
                <input type="checkbox" id="check1">
                <label for="check1">Я согласен на обработку персональных данных</label>
            </p>
            <div class='g-recaptcha' data-sitekey='6Lcx2rYpAAAAADt6RH1YCMjbQXGv59HXYa_ZsSe1'></div>
            <input type='submit' value='Отправить' class='btn btn-primary'>
        </form>
        <?php
        if (!empty($_POST['fio'])) {
            $fio = '';
            $tel = '';
            $comment = '';
            include('configinc.php');
            $fio = $_POST['fio'];
            $tel = $_POST['tel'];
            $comment = $_POST['comment'];
            $fio = htmlspecialchars($fio);
            $tel = htmlspecialchars($tel);
            $comment = htmlspecialchars($comment);
            $fio = urldecode($fio);
            $tel = urldecode($tel);
            $comment = urldecode($comment);
            $to = 'kaleev.fam@mail.ru';
            // адрес получателя
            $subject = 'Пользователь на сайте памятники в Рогачеве оставил комментарий ';
            // текст письма
            $message = 'ФИО: ' . $fio . '<br/>';
            $message .= 'Номер телефона ' . $tel . '<br/>';
            $message .= 'Крмментарий пользователя: ' . $comment;
            $headers = 'MIME-Version: 1.0\r\n';
            $headers .= 'Content-type: text/html; charset=utf-8\r\n';
            // кодировка письма
            $headers .= 'From: Тестовое письмо с сайта памятники в Рогачеве\r\n';
            // от кого письмо
            if (isset($_POST['fio']) and isset($_POST['tel'])) {
                mail($to, $subject, $message, $headers);
                //Запись сообщения в таблицу otzkom БД
                include('configinc.php');
                $datazv = date('Y-m-d H:i:s');
                if (isset($_POST['fio'])) {
                    //вставляем данные, подставляя их в запрос
                    $sql = mysqli_query($db, "INSERT INTO `otzkom` (`fio`, `tel`, `comment`, `datazv`) VALUES ('{$_POST['fio']}', '{$_POST['tel']}', '{$_POST['comment']}', '{$datazv}')");
                    //echo "Данные добавлены в таблицу";
                }
                //Если вставка прошла успешно
                // if ($sql) {
                //     echo '<div>Данные добавлены в таблицу отзывов!</div>';
                // } else {
                //     echo '<p>Произошла ошибка добавления данных в таблицу отзывов: </p>';
                // }
                // echo '<div>Сообщение успешно отправлено на email администратора сайта!</div>';
                //mysqli_free_result($result);
                //mysqli_close($db); 
            }
        }
        ?>
        <?php
        //Получаем данные для отображения на странице отзывов
        include('configinc.php');
        $sort = 'ORDER by `datazv` DESC';
        $result = mysqli_query($db, 'SELECT `fio`,`tel`,`comment`,`datazv` FROM `otzkom` ' . $sort . ''); // запрос на выборку
        $np = 0;
        while ($row = mysqli_fetch_array($result)) {
            $fio = $row['fio'];
            if ($fio) {
                $np++;
                echo '<div class="commenb"';
                echo '<div class="commentv" align="left" style="background: color=#FFF);"><font color=#73888e size="3pt"></font><font color=#c70101 size="4pt"> &nbsp;' . $row["fio"] . '</font>&nbsp;<font color=#73888e size="4pt">' . $row["datazv"] . ' </font></div>';
                echo '<div class="commentv"><p id="ot" align="justify" style="background-color:#FFF;">&nbsp;<font coor=#911E42 size="3pt">' . $row["comment"] . '</font></p></div>';
                echo '</div>';
            }
        }
        echo '<div class="comitog"><h4><font color=#c70101 size="4pt">Всего отзывов: &nbsp;&nbsp;' . $np . '</font></h4></div>';
        mysqli_free_result($result);
        mysqli_close($db);
        echo "<script>window.location.href = ''></script>";

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
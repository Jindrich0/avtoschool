<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/contacts.css" rel="stylesheet">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/zvonok.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/contactVerify.js"></script>
</head>
<body>

<header class="header">
    <a href="index.php" class="brand"><img src="img/logo.svg"></a>
    <nav class="nav">
        <li><a href="students.php" class="li_a">Для учеников</a></li>
        <li><a href="noob.php" class="li_a">Для начинающих</a></li>
        <li><a href="skill.php" class="li_a">Для опытных</a></li>
        <li><a href="o_nas.php" class="li_a">О нас</a></li>
        <li><a href="" class="li_a" style="color: black">Контакты</a></li>
    </nav>
    <div style="display: flex; gap: 10px;">
        <div class="header_button">
            <?php
            if (isset($_COOKIE['fio'])){
                $fio = $_COOKIE['fio'];
                if (!empty($fio)) {
                    ?>
                    <a href="persacc/lichkab.php" class="login">
                        ЛИЧНЫЙ КАБИНЕТ
                        <a href="exit.php">выход</a>
                    </a>
                    <?php
                }
            }
            else {
                ?>
                <a class="open-popup btn" style="cursor:pointer;">
                    вход/регистрация
                </a>
                <?php
            }

            ?>
        </div>
    </div>
</header>


<div class="questionMap">

    <div class="map">
        <div class="mapItem">
            <h2>МЫ ЗДЕСЬ</h2>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa8aee016af8f701fa1cc6398e0bda47f1ea0b694a89f4030d81c1a7909120275&amp;width=900&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        <div class="mapText">
            <div class="mapTextItem">
                <h2>Контакты</h2>
                <p>Телефон офиса</p>
                <h4>+999 777 77 77</h4>
            </div>

            <div class="mapTextItem mapTextItemRow">
                <div>
                    <h4>Адрес</h4>
                    <p>г.Йошкар-Ола, ул.Эшкинина, 25</p>
                </div>
                <div>
                    <h4>Email</h4>
                    go@gmail.com
                </div>
            </div>

            <div class="mapTextItem">
            <h4>Режим работы</h4>
            <p>10:00 - 00:00, без выходных</p>
        </div>
        </div>
    </div>

    <div class="question">
        <div class="questionHead">
            <h2>ГОТОВЫ ОТВЕТИТЬ НА ВСЕ ВОПРОСЫ</h2>
        </div>
        <div class="questionForm" id="contact_form">
                <form name="contact" action="">

                    <?php
                    if (isset($_COOKIE['id'])) {
                        $id = $_COOKIE['id'];
                        $mobile = $_COOKIE['mobile'];
                        ?>
                        <div class="questionItem">
                        <div class="questionItemFlex">
                            <input type="hidden"  class="questionItemInput" name="FIO" id="FIO" value="<?php echo $fio; ?>">
                            <label class="error" for="FIO" id="FIO_error"><br><b>Введите ваше имя</b> </label>
                        </div>
                        <div class="questionItemFlex">
                            <input type="hidden" class="questionItemInput" name="telephone" id="telephone" value="<?php echo $mobile; ?>">
                            <label class="error" for="telephone" id="telephone_error"> <br><b>Номер телефона в формате +7</b> </label>
                            <label class="error" for="telephone" id="telephone_error_length"> <br><b>Длина номера 11 цифр</b> </label>
                        </div>
                    </div>
                    <?php
                    }
                    if (empty($id)){
                        echo '<div class="questionItem">
                        <div class="questionItemFlex">
                            <input type="text"  class="questionItemInput" name="FIO" id="FIO" placeholder="Ваше имя" required>
                            <label class="error" for="FIO" id="FIO_error"><br><b>Введите ваше имя</b> </label>
                        </div>
                        <div class="questionItemFlex">
                            <input type="text" class="questionItemInput" name="telephone" id="telephone" placeholder="Телефон" required>
                            <label class="error" for="telephone" id="telephone_error"> <br><b>Номер телефона в формате +7</b> </label>
                            <label class="error" for="telephone" id="telephone_error_length"> <br><b>Длина номера 11 цифр</b> </label>
                        </div>
                    </div>
                    ';
                    }
                    ?>
                    <div class="questionItem">
                        <div class="questionItemFlex">
                            <input type="text" class="questionItemInputWide" name="text" id="text" placeholder="Сообщение" required>
                            <label class="error" for="text" id="text_error"> <br><b>Заполните поле</b> </label>
                        </div>
                    </div>
                    <div class="questionItem">
                        <button type="submit" class="buttonQuery" name="btnSubmit" id="submit_btn" value="<?php echo $id; ?>">ОТПРАВИТЬ ЗАЯВКУ</button>
                    </div>
                </form>

        </div>
    </div>

</div>

<?php
include_once('footerAndModal.php');
?>



</body>
</html>
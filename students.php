<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/o_nas.css">
    <link rel="stylesheet" href="css/students.css">
    <link rel="stylesheet" href="css/adaptation.css">
    <link rel="stylesheet" href="css/da.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/zvonok.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <a href="index.php" class="brand"><img src="img/logo.svg"></a>
        <nav class="nav">
            <li><a href="students.php" class="li_a" style="color: black">Для учеников</a></li>
            <li><a href="noob.php" class="li_a">Для начинающих</a></li>
            <li><a href="skill.php" class="li_a">Для опытных</a></li>
            <li><a href="o_nas.php" class="li_a">О нас</a></li>
            <li><a href="contacts.php" class="li_a">Контакты</a></li>
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
    <section style="display: flex; margin-top: 10%; margin-left: 5%; margin-bottom: 10%;">
        <div >
            <h1 class="text_obuchenie animated fadeInDown">Обучение для будущих водителей</h1>
            <div style="display: flex; align-items: center;" >
                <div>
                    <h1 class="obuc_cifri"><img src="img/galka_red.svg" class="animated fadeInUp"></h1>
                </div>
                <div>
                    <h1 class="obuc_text animated fadeInRight">Проверяем навыки в городе и на площадке</h1>
                </div>
            </div>
            <div style="display: flex;  align-items: center;">
                <div>
                    <h1 class="obuc_cifri"><img src="img/galka_red.svg" class="animated fadeInLeft"></h1>
                </div>
                <div>
                    <h1 class="obuc_text animated fadeInRight">Помогаем ученикам, которые хотят стать водителями, дополнительно подготовиться
                        к экзамену в автошколе или ГИБДД</h1>
                </div>
            </div>
            <div style="display: flex;  align-items: center;">
                <div>
                    <h1 class="obuc_cifri"><img src="img/galka_red.svg" class="animated fadeInDown"></h1>
                </div>
                <div>
                    <h1 class="obuc_text animated fadeInRight">Помогаем исправить ошибки и развить ваши навыки вождения: улучшить технику
                        переключения передач, проезд перекрестков и развороты, технику руления</h1>
                </div>
            </div>
        </div>
        <div style="margin-left: 25%;">
            <img src="img/svetofor.svg" class="animated fadeInRight">
        </div>
    </section>
    <section class="block_uslugi animation" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
        <div>
            <h1 class="uslugi_text animation ">Вам подойдет, если</h1>
            <div style="display: flex; gap: 5%; justify-content: center;">
                <div class="animation">
                    <div class="linia"></div>
                    <h1 class="uslugi_content" style="width: 344px;">Готовитесь получить водительское удостоверение и
                        хотите отработать элементы вождения, которые нужны к сдаче экзамена</h1>
                </div>
                <div class="animation">
                    <div class="linia"></div>
                    <h1 class="uslugi_content" style="width:309px;">Вы сомневаетесь в своей предрасположенности к
                        вождению, хотите проверить стоит ли учится водить</h1>
                </div>
                <div class="animation">
                    <div class="linia"></div>
                    <h1 class="uslugi_content" style="width: 226px;">Учитесь вождению, но не уверены в своих навыках
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 class="animation" style="font-family: Micra;font-style: normal;font-weight: 5;font-size: 60px;line-height: 49px;color: #2F2F2F;">Пробная тренировка</h1>
        <div style="display: flex; margin-top: 7%; margin-left: 15%;">
            <div><img src="img/shel_stoit.svg" class="animation"></div>
            <div style="margin-left: 35%;">
                <div>
                    <h1 class="trenirovka_text animation">Только собираетесь в автошколу и мучаетесь сомнениями, получится ли у вас водить автомобиль или нет? На пробном занятии мы оценим способности к вождению, поможем определиться с выбором коробки передач.</h1>
                </div>
                <div style="display: flex; margin-top: 60px; gap: 80px;">
                    <div >
                        <h1 class="stoimost_text_one animation">Стоимость и длительность тренировки</h1>
                        <h1 class="stoimost_text_two animation">60 мин вождение + 15 мин ответы на вопросы</h1>
                        <h1 class="stoimost_text_three animation">1000 ₽</h1>
                    </div>
                    <div>
                        <h1 class="stoimost_text_one animation">Место встречи</h1>
                        <h1 class="stoimost_text_two animation" style="margin-top: 50px;">улица Строителей, Йошкар-Ола</h1>
                        <div class="stoimost_button animation">
                            <a href="#openModal">
                                записаться
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px; margin-bottom: 150px;">
        <h1 class="animation" style="font-family: 'EurostileExtended-Roman-DTC';font-style: normal;font-weight: 5;font-size: 60px;line-height: 49px;color: #2F2F2F; margin-left: 50%;">Программа подготовки к экзамену</h1>
        <div style="display: flex; margin-top: 7%;">
            <div>
                <div style="display: flex; margin-top: 60px; gap: 30px;">
                    <div>
                        <h1 class="stoimost_text_one animation">Цель</h1>
                        <h1 class="stoimost_text_two animation">Сдать экзамен в ГИБДД</h1>
                        <h1 class="stoimost_text_one animation">В результате</h1>
                        <h1 class="stoimost_text_two animation">Освоите базовые навыки вождения и сдадите на права</h1>
                    </div>
                    <div>
                        <h1 class="stoimost_text_one animation">Как проходит тренировка</h1>
                        <h1 class="stoimost_text_two animation" style="margin-top: 50px; width: 500px; ">Вне зависимости от места проведения экзамена водителю надо уметь выполнять основные элементы: начало движения на подъеме, развороты, проезд перекрестков и др. Именно на приобретение базовых навыков и нацелена данная программа с учетом пожеланий клиента.</h1>
                        <div class="stoimost_button animation">
                            <a href="#openModal">
                                записаться
                            </a>
                        </div>
                    </div>
                </div>
                <div style="display: flex; gap: 60px; margin-top: 90px;" class="">
                    <div class="animation">
                        <div style="text-align: center;">
                            <h1  class="time">1 час</h1>
                        </div>
                        <div style="display: flex; gap: 30px;">
                            <div class="stoimost_time_block">
                                <h1 class="time_text">Будни</h1>
                                <h1 class="time_text_price">1800 ₽</h1>
                            </div>
                            <div class="stoimost_time_block">
                                <h1 class="time_text">Выходные</h1>
                                <h1 class="time_text_price">2000 ₽</h1>
                            </div>
                        </div>
                    </div>
                    <div class="animation">
                        <div style="text-align: center;">
                            <h1 class="time">2 часа</h1>
                        </div>
                        <div style="display: flex; gap: 30px;">
                            <div class="stoimost_time_block">
                                <h1 class="time_text">Будни</h1>
                                <h1 class="time_text_price">3300 ₽</h1>
                            </div>
                            <div class="stoimost_time_block">
                                <h1 class="time_text">Выходные</h1>
                                <h1 class="time_text_price">3800 ₽</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div><img src="img/prava.svg" style="margin-left: 70%; margin-top: 20%;" class="animation"></div>
        </div>
    </section>


    <section class="footer">
        <div style="display: flex; justify-content: space-between;">
            <div>
                <div class="footer_logo">
                    <h1 class="footer_logo_text">STREET RACING</h1>
                    <h1 class="footer_logo_content">Школа дополнительной подготовк водителей</h1>
                </div>
                <div class="foter_links">
                    <a href="students.php">для учеников</a>
                    <a href="noob.php">для начинающих</a>
                    <a href="skill.php">для опытных</a>
                    <a href="contacts.php">контакты</a>
                </div>
            </div>
            <div class="foter_data">
                <h1 class="foter_data_one">Телефон офиса</h1>
                <h1 class="foter_data_two">+999 777 77 77</h1>
                <h1 class="foter_data_three">Работаем с 10:00 до 00:00, без выходных</h1>
                <h1 class="foter_data_four">Адрес школы</h1>
                <h1 class="foter_data_five">г. Йошкар-Ола, ул. Эшкинина, 25</h1>
            </div>
            <div class="footer_buton">
                <a href="#openModal" style="text-decoration:none;">
                    заказать обратный звонок</a>
            </div>
        </div>
    </section>

    <?php
    include_once('footerAndModal.php');
    ?>

</body>
</html>
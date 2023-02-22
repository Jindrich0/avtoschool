<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
    <link rel="stylesheet" href="css/glavnai.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/da.css">
    <link rel="stylesheet" href="css/zvonok.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="Head">
                <div class="container">
                    <div class="head__row">
                        <header class="header" style="width: 94%; position: fixed;">
                            <a href="index.php" class="brand"><img src="img/Vector_white.svg"></a>
                            <nav class="nav">
                                <li><a href="students.php" class="li_a">Для учеников</a></li>
                                <li><a href="noob.php" class="li_a">Для начинающих</a></li>
                                <li><a href="skill.php" class="li_a">Для опытных</a></li>
                                <li><a href="o_nas.php" class="li_a">О нас</a></li>
                                <li><a href="contacts.php" class="li_a">Контакты</a></li>
                            </nav>
                            <div>
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
                        <div class="head__txt">
                            <div class="txt">
                                <div class="first__par animated fadeInDown">
                                    <h1>школа дополнительной</h1>
                                </div>
                                <div class="second__par animated fadeInRight">
                                    <h1>подготовки водителей</h1>
                                    <a href="#openModal" class="zakazat_zvonok" style="text-decoration: none;color: white;font-size: 15px;padding: 21px 53px;font-weight: 500">
                                    заказать обратный звонок</a>
                                </div>
                                <div class="third__par animated fadeInUp">
                                    <h1 class="third__par__h1">street racing</h1>
                                    <div class="txt__adv animated fadeInUp">
                                        <h1>превращаем страх вождения в уверенность</h1>
                                    </div>
                                    <div class="txt__adv animated fadeInUp">
                                        <h1>учим поведению в экстремальных условиях</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Main animated fadeInUp">
                <div class="main__go">
                    <h1 class="main_go" id="go"><a href="#go" style="text-decoration: none; color: black;">поехали</a></h1>
                </div>
                <div class="container">

                    <!--  =============================== МЫ КРУТЫЕ  ================================ -->

                    <div class="info__row animation">
                        <div class="info__item">
                            <div class="info__first">5</div>
                            <div class="info__second">лет учим безопасному вождению</div>
                        </div>
                        <div class="info__item">
                            <div class="info__first">700</div>
                            <div class="info__second">учеников прошли обучение</div>
                        </div>
                        <div class="info__item">
                            <div class="info__first">1250</div>
                            <div class="info__second">часов обучение в год</div>
                        </div>
                        <div class="info__item">
                            <div class="info__first">10
                                <span>*</span>
                                <div class="info__hov">
                                    <h1 class="info_hov"> Если не найдете программу под свой запрос, мы разработаем
                                        ее для вас или предложим программу, которая не отражена на сайте</h1>
                                </div>
                            </div>
                            <div class="info__second">программ для разного уровня водительского мастерства</div>
                        </div>
                    </div>

                    <!-- =============================== ПОЧЕМУ МЫ КРУТЫЕ  ================================ -->

                    <div class="lil__go ">
                        <div class="lil__title title animation"><h1>школа, которая научит водить безопасно</h1></div>
                        <div class="lil__row ">
                            <div class="lil__img animation">
                                <img src="img/carchik.svg">
                            </div>
                            <div class="lil__txt">
                                <div class="lil__first animation">
                                    <h1> В нашей школе вы пройдете обучение с профессиональным тренером, который поможет
                                        исправить ошибки вне зависимости от уровня вождения.</h1>
                                </div>
                                <div class="lil__second animation">Пройдя обучение, вы станете целостно понимать
                                    дорожную ситуацию, выбирать решения с минимальным риском для себя и окружающих,
                                    ощущать полную свободу передвижения на авто.</div>
                            </div>
                        </div>
                    </div>

                    <div class="Directions">
                        <div class="dir__var">
                            <div class="dir__title title animation">3 направления обучения</div>
                            <div class="dir__btns animation">
                                <div class="btn__first btn"><a href="#school"><button
                                            class="button_red">автошкола</button></a></div>
                                <div class="btn__second btn"><a href="#noob"><button
                                            class="button_yellow">начинающий</button></a></div>
                                <div class="btn__third btn"><a href="#opitni"><button
                                            class="button_green">опытный</button></a></div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <!-- ================================= ДОРОГААААААААААААААААА ================================== -->

            <div class="container__doroga">
                <div class="doroga__blyat">
                    <div class="doroga__img">
                        <div class="zeroone animated fadeInUp" id="school">
                            01
                        </div>
                        <div class="zerotwo animated fadeInUp" id="noob">
                            02
                        </div>
                        <div class="zerothree animated fadeInUp">
                            03
                        </div>
                        <img src="img/doroga2.svg">
                        <div class="first__floor">
                            <div class="doroga__prog animation">
                                Программы
                                <div class="doroga__list animation">
                                    <div class="list">пробная тренировка</div>
                                    <div class="list">подготовка к экзамену</div>
                                </div>
                            </div>
                            <div class="doroga__prog animation">
                                Автошкола
                                <div class="doroga__txt animation">
                                    Ощущаете недостаток знаний в автошколе, были большие перерывы в практических уроках
                                    или желаете проверить себя: сможете ли водить перед тем как пойти учиться
                                </div>
                            </div>

                        </div>


                        <div class="second__floor">
                            <div class="doroga__prog animation" id="opitni">
                                Начинающий водитель
                                <div class="doroga__txt animation">
                                    Получили водительское удостоверение, но чувствуете неуверенность на дороге
                                </div>
                            </div>
                            <div class="doroga__prog animation">
                                Программы

                                <div class="doroga__list animation">
                                    <div class="list">тест-поездка</div>
                                    <div class="list">габариты</div>
                                    <div class="list">город</div>
                                    <div class="list">парковка-интенсив</div>
                                    <div class="list">шоссе</div>
                                    <div class="list">индивидуальная программа</div>
                                </div>
                            </div>

                        </div>

                        <div class="third__floor">
                            <div class="doroga__prog animation">
                                Опытный водитель
                                <div class="doroga__txt animation">
                                    Нет страха вождения и неуверенности за рулем, но есть трудности в некторых
                                    ситуациях, хотите повысить мастерство вождения
                                </div>
                            </div>
                            <div class="doroga__prog animation">
                                Программы
                                <div class="doroga__list animation">
                                    <div class="list">контраварийное вождение</div>
                                    <div class="list">скоростное маневрирование</div>
                                    <div class="list">техника руления</div>
                                    <div class="list">индивидуальная программа</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- =================================== СЛАЙДЕР ========================================== -->
        <div class="slider">
            <div class="container ">
                <div class="title animation">профессиональные инструкторы помогут в обучении</div>
                <div class="slider__row">
                    <div class="slider__image animation">
                        <img src="img/man2.png">
                        <div class="slider__txt">
                            <div class="sl__txt__title">вадим самойлов</div>
                            <div class="sl__txt__about">Стаж вождения 10 лет</div>
                        </div>
                    </div>
                    <div class="slider__image animation">
                        <img src="img/man3.png">
                        <div class="slider__txt">
                            <div class="sl__txt__title">дмитрий нагиев</div>
                            <div class="sl__txt__about">Стаж вождения 9 лет</div>
                        </div>
                    </div>
                    <div class="slider__image animation">
                        <img src="img/woman1.png">
                        <div class="slider__txt">
                            <div class="sl__txt__title">роман оношенко</div>
                            <div class="sl__txt__about">Стаж вождения 18 лет</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================================== АККОРДЕОН ====================================== -->

        <div class="tabs">
            <div class="container">
                <div class="title animation">
                    у нас комфортно ученикам любого уровня подготовки
                </div>
                <div class="tabs__image">
                    <div class="tabs__row animation">

                        <div class="tab">
                            <div class="accordion">
                                Как проходят занятия?
                            </div>
                            <div class="panel">
                                Новый клиент выбирает программу обучения. Мы рекомендуем пройти пробное занятие. Оно может быть в формате теста при наличии опыта вождения или как полноценное обучающее занятие. На таком занятии как раз человек знакомится с тренером, манерой подачи материала, автомобилем, выявляется потребность в занятиях и их количестве. Сами занятия состоят из теории и практики, так как “теория без практики мертва практика без теории слепа”
                            </div>
                        </div>

                        <div class="tab">
                            <div class="accordion">
                                Что необходимо иметь с собой?
                            </div>
                            <div class="panel">
                                Водительское удостоверение, при его отсутствии — паспорт.
Вода — мы много говорим.
Удобная обувь, в приоритете кроссовки.
Ручка и бумага для записей.
Необходимо воздержаться от алкоголя в течение 24 часов до тренировки.
                            </div>
                        </div>
                        <div class="tab">

                            <div class="accordion">
                                На каком автомобиле проходит обучение?
                            </div>
                            <div class="panel">
                                На автомобилях школы с дублирующими педалями, авто клиента или каршеринге.
                            </div>
                        </div>
                        <div class="tab">

                            <div class="accordion">
                                Принимаете карты к оплате?
                            </div>
                            <div class="panel">
                                Да. И выдаем чек.
                            </div>
                        </div>
                        <div class="tab">

                            <div class="accordion">
                                Где проходят занятия?
                            </div>
                            <div class="panel">
                                Занятия начинаются от метро Крылатское или Мневники. Другие адреса согласуются в индивидуальном порядке. А сами маршруты составляются в зависимости от прорабатываемых навыков, учитывая пробки. МКАД, ТТК и центр тоже входят в маршруты.
                            </div>
                        </div>
                        <div class="tab">

                            <div class="accordion">
                                Сколько занятий нужно пройти, чтобы водить самостоятельно?
                            </div>
                            <div class="panel">
                                Зависит от интенсивности и выбранной программы обучения. В среднем после 15-20 часов ученики начинают параллельно тренировкам в нашей школе практиковаться с кем-то из своего окружения или одни.
                            </div>
                        </div>
                        <div class="tab">

                            <div class="accordion">
                                Сможете подготовить к экзамену ГИБДД?
                            </div>
                            <div class="panel">
                                Сможем, но для выхода на экзамен нужно пройти обучение в автошколе (мы не выдаем сертификат о прохождении обучения для подачи документов на сдачу экзамена в ГИБДД). Вам останется только накатать практику с инструктором автошколы по экзаменационным маршрутам.
                            </div>
                        </div>

                    </div>

                    <div class="img__row ">
                        <img src="img/chel_machina.svg" class="animation">
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================================== ОТЗЫВЫ ================================================ -->
        <div class="Callback">
            <div class="container ">
                <div class="callback__row">
                    <div class="call__title animation">
                        Почитайте <span>отзывы</span> наших учеников
                    </div>
                    <div class="callbacks animation">
                        <div class="callback__item">
                            <div class="callback__head">
                                <div class="call__item__info">
                                    <div class="call__item__title"><h1 class="Otziv">Ксения</h1></div>
                                    <div class="call__item__type">Экстремальное вождение</div>
                                </div>
                                <div class="callback__rating">
                                    <img src="img/zvezdi.svg">
                                </div>
                            </div>
                            <div class="call__item__text">
                                Занятия существенно отличались от тех, что были в автошколе. Очень интересная методика, превращающая обычные покатушки как в автошколе в системную серию заданий по выявленным проблемам. Интересно и занимательно, приду еще :)
                            </div>
                        </div>
                        <div class="callback__item">
                            <div class="callback__head">
                                <div class="call__item__info">
                                    <div class="call__item__title"><h1 class="Otziv">Лиана</h1></div>
                                    <div class="call__item__type">Вождение (АКПП)</div>
                                </div>
                                <div class="callback__rating">
                                    <img src="img/zvezdi.svg">
                                </div>
                            </div>
                            <div class="call__item__text">
                                Провел с Николаем пробное занятие. Очень качественный, системный подход к обучению. Проехали по действительно непростым для меня местам. Узнал много полезного о своих недочетах в вождении. Инструктор очень вежливый, внимательный.
                            </div>
                        </div>
                        <div class="callback__item">
                            <div class="callback__head">
                                <div class="call__item__info">
                                    <div class="call__item__title"><h1 class="Otziv">Вадим</h1></div>
                                    <div class="call__item__type">Вождение (АКПП)</div>
                                </div>
                                <div class="callback__rating">
                                    <img src="img/zvezdi.svg">
                                </div>
                            </div>
                            <div class="call__item__text">
                                Провел с Николаем пробное занятие. Очень качественный, системный подход к обучению. Проехали по действительно непростым для меня местам. Узнал много полезного о своих недочетах в вождении. Инструктор очень вежливый, внимательный.
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once('footerAndModal.php');
    ?>

    <footer>
        <div class="container">
            <div class="footer__first">
                <div class="footer__title">
                    street racing
                </div>
                <div class="footer__text">
                    школа дополнительной подготовки водителей
                </div>
                <div class="footer__list">
                    <div class="flist">для учеников</div>
                    <div class="flist">для начинающих</div>
                    <div class="flist">для опытных</div>
                    <div class="flist">контакты</div>
                </div>
            </div>
            <div class="footer__second">
                <div class="tele__title">Телефон офиса</div>
                <div class="tele__tele">+ 999 777 77 77</div>
                <div class="tele__text">Работаем с 10:00 до 00:00 без выходных</div>
                <div class="tele__addres">Адрес школы</div>
                <div class="tele__actual__addres">г.Йошкар-Ола, ул.Эшкинина, 25</div>
            </div>
            <div class="footer__third">
                <div class="footer__btn">
                    <a href="#openModal" style="text-decoration:none; color:white;">
                        <button>заказать звонок</button></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>
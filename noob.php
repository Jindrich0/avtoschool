<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/noob.css">
    <link rel="stylesheet" href="css/o_nas.css">
    <link rel="stylesheet" href="css/da.css">
    <link rel="stylesheet" href="css/zvonok.css">
</head>
<body>
    <div class="wrapper">
        <div class="content">

            <header class="header" style="width: 94%; position: fixed;">
                <a href="index.php" class="brand"><img src="img/logo.svg"></a>
                <nav class="nav">
                    <li><a href="students.php" class="li_a">Для учеников</a></li>
                    <li><a href="noob.php" class="li_a" style="color: black">Для начинающих</a></li>
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

            <div class="Noob__head">
                <div class="container">
                    <div class="noob__head__row">
                        <div class="noob__item animated fadeInLeft">
                            <img src="img/machinanadoroge.png">
                        </div>
                        <div class="noob__item">
                            <div class="noob__title animated fadeInDown">Обучение начинающих водителей</div>
                            <div class="noob__info">
                                <div class="first__info">
                                    <div class="first"><img src="img/orangeznak.svg"  class="animated fadeInLeft"></div>
                                    <div class="txt animated fadeInRight">Изучаем поведение автомобиля в экстремальных ситуациях</div>
                                </div>
                                <div class="second__info">
                                    <div class="first"><img src="img/orangeznak.svg"  class="animated fadeInLeft"></div>
                                    <div class="txt animated fadeInRight">Тренируем предотвращать скольжение автомобиля: снос, занос, вращение</div>
                                </div>
                                <div class="third__info">
                                    <div class="first"><img src="img/orangeznak.svg"  class="animated fadeInLeft"></div>
                                    <div class="txt animated fadeInRight">Разбираем сложные ситуации, которые не предусмотрены программой автошколы: ездим по шоссе, паркуемся в узких местах с реальными автомобоилми, управляем авто на большой скорости</div>
                                </div>
                            </div>
                            <div class="noob__btns">
                                <div class="btn__first animated fadeInUp"><a href="#openModal"><button>записаться</button></a></div>
                                <div class="btn__second animated fadeInUp"><a href="#program"><button> программы</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- ============================================================================================== -->

            <div class="Fits">
                <div class="container">
                    <div class="fits__row animation">
                        <div class="fits__title title__big">Вам подойдет, если</div>
                        <div class="fits__info">
                            <div class="fits__first animation">Хотите улучшить конкретные навыки: перестроение, парковку, маневрирование, движение в потоке машин</div>
                            <div class="fits__second animation">Есть опыт вождения в другом городе, а хочется поездить в интенсивном потоке Москвы</div>
                            <div class="fits__third animation">Есть права, но не хватает навыков для реального вождения</div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- ============================================================================================== -->

            <div class="Progs" id="program">
                <div class="container__small ">
                    <div class="progs__title title__bigg animation">6 программы для<br>начинающих водителей</div>
                    <div class="progs__box">
                        <a class="box__prop animation" href="#test">Тест-поездка</a>
                        <a class="box__prop animation" href="#progamma">Индивидуальная программа</a>
                        <a class="box__prop animation" href="#gapariti">Габариты</a>
                        <a class="box__prop animation" href="#gorod">Город</a>
                        <a class="box__prop animation" href="#parkovka">Парковка-интенсив</a>
                        <a class="box__prop animation" href="#road">Шоссе</a>
                    </div>
                </div>
            </div>


            <!-- ============================================================================================== -->
            <div class="Bloki">
                <div class="OFirst">
                    <div class="container">
                        <div class="O__number animation" id="test">
                            01
                        </div>
                        <div class="container__small cont__flex">
                            <div class="Ofirst__title title animation">Пробная тест-поездка</div>
                            <div class="part__row">
                                <div class="Ofirst__part1">
                                    <div class="part__img animation">
                                        <img src="img/IMAGE.svg">
                                    </div>
                                    <div class="part__txt">
                                        <div class="double__par">
                                            <div class="txt1 animation">
                                                <h2>Цель</h2>
                                                <p>Выявить недостающие навыки, проверить наличие ошибок</p>
                                            </div>
                                            <div class="txt2 animation">
                                                <h2>В результате</h2>
                                                <p>Вы увидите свои сильные и слабые стороны в вождении и поймете, над чем нужно работать.</p>
                                                <div class="btn__first" style="margin-top: 40px;">
                                                    <a href="#openModal">
                                                        <button>записаться</button>
                                                    </a>        
                                                </div>
                                            </div>

                                        </div>
                                        <div class="txt3 animation">
                                            <h2>Как проходит<br>тренировка</h2>
                                            <p>Инструктор не вмешивается в управление автомобилем (если только в случае обеспечения безопасности), проверяет ваши навыки и формирует индивидуальную программу обучения.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="Ofirst__part2">
                                    <div class="info__txt">
                                        <div class="txt1 animation">
                                            <h2>Стоимость и длительность тренировки</h2>
                                            <p>60 мин тест навыков + 30 мин разбор ошибок и составление программы обучения </p>
                                        </div>
                                        <div class="types animation">
                                            <div class="personal">
                                                <div class="type__price animation">2500Р</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Bloki">
                <div class="OFirst">
                    <div class="container">
                        <div class="O__number animation" id="progamma">
                            02
                        </div>
                        <div class="container__small cont__flex">
                            <div class="Ofirst__title title animation">Индивидуальная программа</div>
                            <div class="part__row">
                                <div class="Ofirst__part1">
                                    <div class="part__img animation">
                                        <img src="img/car_noob.svg">
                                    </div>
                                    <div class="part__txt">
                                        <div class="double__par">
                                            <div class="txt1 animation">
                                                <h2>Цель</h2>
                                                <p>Развить навыки вождения и избавиться от вредных привычек</p>
                                            </div>
                                            <div class="txt2 animation">
                                                <h2>В результате</h2>
                                                <p>Отработаете проблемные места и освоите навыки управления автомобилем на профессиональном уровне</p>
                                                <div class="btn__first" style="margin-top: 40px;">
                                                    <a href="#openModal">
                                                        <button>записаться</button>
                                                    </a>   
                                            </div>
                                            </div>

                                        </div>
                                        <div class="txt3 animation">
                                            <h2>Как проходит<br>тренировка</h2>
                                            <p>Индивидуальная программа обучения разрабатывается после тест-поездки. Вы будете проходить только те темы, которые действительно необходимы.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Bloki">
                <div class="OFirst">
                    <div class="container">
                        <div class="O__number animation"id="gapariti">
                            03
                        </div>
                        <div class="container__small cont__flex">
                            <div class="Ofirst__title title animation">Габариты</div>
                            <div class="part__row">
                                <div class="Ofirst__part1">
                                    <div class="part__img animation">
                                        <img src="img/manevr.svg" style="width: 90%;">
                                    </div>
                                    <div class="part__txt">
                                        <div class="double__par">
                                            <div class="txt1 animation">
                                                <h2>Цель</h2>
                                                <p>Научиться маневрировать передним и задним ходом во дворах жилых домов, на парковках ТЦ</p>
                                            </div>
                                            <div class="txt2 animation">
                                                <h2>В результате</h2>
                                                <p>Вы научитесь чувствовать габариты автомобиля, без проблем управлять им в узких проездах задним и передним ходом</p>
                                                <div class="btn__first" style="margin-top: 40px;">
                                                    <a href="#openModal">
                                                        <button>записаться</button>
                                                    </a>   
                                            </div>
                                            </div>

                                        </div>
                                        <div class="txt3 animation">
                                            <h2>Как проходит<br>тренировка</h2>
                                            <p>Комплекс упражнений на площадке с конусами, где последовательно учимся чувствовать габариты авто. Затем навыки закрепляются в реальных условиях: во дворах и узких проездах. Упражнения мы разрабатываем самостоятельно, поэтому они отличаются от программы ГИБДД. Эффективность занятий подтверждают даже опытные водители.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="Ofirst__part2">
                                    <div class="info__txt">
                                        <div class="txt1 animation">
                                            <h2>Стоимость и длительность тренировки</h2>
                                        
                                        </div>
                                        <div class="types">
                                            <div class="personal">
                                                <div class="type__price animation">2500Р</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="Bloki">
                <div class="OFirst">
                    <div class="container">
                        <div class="O__number animation" id="gorod">
                            04
                        </div>
                        <div class="container__small cont__flex">
                            <div class="Ofirst__title title animation">Город</div>
                            <div class="part__row">
                                <div class="Ofirst__part1">
                                    <div class="part__img animation">
                                        <img src="img/chel_svetofor.svg" style="width: 90%;">
                                    </div>
                                    <div class="part__txt">
                                        <div class="double__par">
                                            <div class="txt1 animation">
                                                <h2>Цель</h2>
                                                <p>Научиться самостоятельно водить в большом городе — Москве, Санкт-Петербурге и других мегаполисах.</p>
                                            </div>
                                            <div class="txt2 animation">
                                                <h2>В результате</h2>
                                                <p>Станет легко ездить в городе: на перекрёстках, парковках, в потоке автомобилей. Вы научитесь держать скорость потока и дистанцию, распознавать намерения участников движения.</p>
                                                <div class="btn__first" style="margin-top: 40px;">
                                                    <a href="#openModal">
                                                        <button>записаться</button>
                                                    </a>   
                                                </div>
                                            </div>

                                        </div>
                                        <div class="txt3 animation">
                                            <h2>Как проходит<br>тренировка</h2>
                                            <p>Обучение в реальном городском потоке. Вам предстоит вождение по разным не повторяющемся маршрутам, в том числе с заездом внутрь ТТК и Садового кольца. Учимся ездить по навигатору и парковаться.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="Ofirst__part2">
                                    <div class="info__txt">
                                        <div class="txt1 animation">
                                            <h2>Стоимость и длительность тренировки</h2>
                                            <p>После тест-поездки вы получите программу с количеством занятий. Рекомендуем 2-часовое обучение. Такая длительность занятий позволяет быстрее обучаться: вы сможете расширять географию поездок, успевать пройти теоретический материал и распробовать изученное на практике, а также отработать свои навыки.</p>
                                        </div>
                                        <div class="types">
                                            <div class="personal">
                                                <div class="type__price animation">2500Р</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Bloki">
                <div class="OFirst">
                    <div class="container">
                        <div class="O__number animation" id="parkovka">
                            05
                        </div>
                        <div class="container__small cont__flex">
                            <div class="Ofirst__title title animation">Парковка-интенсив</div>
                            <div class="part__row">
                                <div class="Ofirst__part1">
                                    <div class="part__img animation">
                                        <img src="img/chel_parkovka.svg">
                                    </div>
                                    <div class="part__txt">
                                        <div class="double__par">
                                            <div class="txt1 animation">
                                                <h2>Цель</h2>
                                                <p>Научится идеально парковаться в сложных местах или улучшить навыки традиционных вариантов парковок</p>
                                            </div>
                                            <div class="txt2 animation">
                                                <h2>В результате</h2>
                                                <p>Отработаете алгоритмы парковок, применимый к вашему автомобилю. Научитесь правильно распределять внимание и контролировать габариты на парковочном месте</p>
                                                <div class="btn__first" style="margin-top: 40px;">
                                                    <a href="#openModal">
                                                        <button>записаться</button>
                                                    </a>   
                                                </div>
                                            </div>

                                        </div>
                                        <div class="txt3 animation">
                                            <h2>Как проходит<br>тренировка</h2>
                                            <p>Отрабатываем парковку между реальными учебными автомобилями. В ходе тренировки усложняем маневры, используя перестановку учебных автомобилей, конусов. Обучение проходит на вашей машине или каршеринге</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="Ofirst__part2">
                                    <div class="info__txt">
                                        <div class="txt1 animation">
                                            <h2>Стоимость и длительность тренировки</h2>
                                        </div>
                                        <div class="types animation">
                                            <div class="personal">
                                                <div class="type__price">2500Р</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Bloki">
                <div class="OFirst">
                    <div class="container">
                        <div class="O__number animation" id="road" >
                            06
                        </div>
                        <div class="container__small cont__flex">
                            <div class="Ofirst__title title animation">Шоссе</div>
                            <div class="part__row">
                                <div class="Ofirst__part1">
                                    <div class="part__img animation">
                                        <img src="img/chel_road.svg" style="width: 90%;">
                                    </div>
                                    <div class="part__txt">
                                        <div class="double__par">
                                            <div class="txt1 animation">
                                                <h2>Цель</h2>
                                                <p>Научится поддерживать скорости движения до 110 км/ч, перестраиваться на МКАД, ТТК, проезжать развязки</p>
                                            </div>
                                            <div class="txt2 animation">
                                                <h2>В результате</h2>
                                                <p>Избавитесь от страха высокой скорости, научитесь вливаться в скоростной поток, перестраиваться и проезжать транспортные развязки.</p>
                                                <div class="btn__first" style="margin-top: 40px;">
                                                    <a href="#openModal">
                                                        <button>записаться</button>
                                                    </a>   
                                                </div>
                                            </div>

                                        </div>
                                        <div class="txt3 animation">
                                            <h2>Как проходит<br>тренировка</h2>
                                            <p>Начнем движение с малоинтенсивных скоростных дорог и продолжим по МКАД, ТТК, набережным города. Разберем вождение с точки зрения физики автомобиля. Отработаем контраварийное вождение. Вождение по серпантину с обилием скоростных поворотов.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="Ofirst__part2">
                                    <div class="info__txt">
                                        <div class="txt1 animation">
                                            <h2>Стоимость и длительность тренировки</h2>
                                        </div>
                                        <div class="types">
                                            <div class="personal">
                                                <div class="type__price animation">2500Р</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Progs">
                <div class="container__small">
                    <div class="progs__title title__big animation">На каком авто проходят тренировки</div>
                    <div class="progs__box">
                        <div class="box__prop animation">Ваш личный автомобиль</div>
                        <div class="box__prop animation">Учебный автомобиль</div>
                        <div class="box__prop animation">Каршеринговый автомобиль</div>
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
        </div>
    </div>
</body>
<script src="js/main.js"></script>
</html>
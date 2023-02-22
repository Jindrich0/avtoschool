<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/skill.css">
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
                    <li><a href="noob.php" class="li_a">Для начинающих</a></li>
                    <li><a href="skill.php" class="li_a" style="color: black">Для опытных</a></li>
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
            <div class="Skill__head">
                <div class="container">
                    <div class="skill__head__row">
                        <div class="skill__item">
                            <div class="skill__title animated fadeInDown">Обучение опытных водителей</div>
                            <div class="skill__info">
                                <div class="first__info">
                                    <div class="first"><img src="img/galka_green.svg" class="animated fadeInLeft"></div>
                                    <div class="txt animated fadeInRight" style="font-family: Jura;">Изучаем поведение автомобиля в экстремальных ситуациях</div>
                                </div>
                                <div class="second__info">
                                    <div class="first"><img src="img/galka_green.svg" class="animated fadeInLeft"></div>
                                    <div class="txt animated fadeInRight" style="font-family: Jura;">Тренируем предотвращать скольжение автомобиля: снос, занос, вращение</div>
                                </div>
                            </div>
                            <div class="skill__btns">
                                <div class="btn__first animated fadeInUp"><a href="#openModal"><button>записаться</button></a></div>
                                <div class="btn__second animated fadeInUp"><a href="#program"><button>программы</button></a></div>
                            </div>
                        </div>
                        <div class="skill__item animated fadeInRight">
                            <img src="img/tachki.svg">
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
                            <div class="fits__first animation">Вы хотите научиться контраварийным, спортивным и "экстремальным" приемам управления автомобилем</div>
                            <div class="fits__second animation">Вы чувствуете, что не готовы к экстремальным ситуациям и неуверенно водите в сложных погодных условиях</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================================================== -->

            <div class="Progs" id="program">
                <div class="container__small ">
                    <div class="progs__title title__bigg animation">4 программы для опытных водителей</div>
                    <div class="progs__box">
                        <a class="box__prop animation" href="#kontra">Контраварийное вождение</a>
                        <a class="box__prop animation" href="#speed">Скоростное маневрирование</a>
                        <a class="box__prop animation" href="#rulenie">Техника руления</a>
                        <a class="box__prop animation" href="#gorod">Индивидуальная программа</a>
                    </div>
                </div>
            </div>

            <!-- ============================================================================================== -->
            <div class="O__number animation">
                01
            </div>
            <div class="OFirst">
                <div class="container">
                    <div class="container__small">
                        <div class="Ofirst__title title animation" id="kontra">Контраварийное вождение</div>
                        <div class="part__row">
                            <div class="Ofirst__part1">
                                <div class="part__img animation">
                                    <img src="img/machinadoroga2.svg">
                                </div>
                                <div class="part__txt animation">
                                    <div class="double__par">
                                        <div class="txt1">
                                            <h2>Цель</h2>
                                            <p>Научиться выходить из аварийных ситуаций без потерь</p>
                                        </div>
                                        <div class="txt2">
                                            <h2>В результате</h2>
                                            <p>Вы будете знать, что делать в опасной дорожной ситуации и чувствовать себя увереннее при таких обстоятельствах</p>
                                            <a href="#openModal">
                                                <button>записаться</button>
                                            </a>   
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        <h2>Как проходит<br>тренировка</h2>
                                        <p>Совместно с инструктором отрабатываете экстренное торможение, объезд внезапно возникшего препятствия ("лосиный тест"), обгоны, прохождение опасных поворотов, стабилизацию автомобиля при сносе и заносе, вращении.</p>
                                        <p>При обучении используем конусы, рации и другое специализированное оборудование</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Ofirst__part2 animation">
                                <div class="info__txt">
                                    <div class="txt1">
                                        <h2>Стоимость и длительность тренировки</h2>
                                        <p>Стоимость варьируется в зависимости от локации и выбора автомобиля (школы или клиента)?</p>
                                    </div>
                                    <div class="types">
                                        <div class="personal animation">
                                            <div class="type__title"><h2>Персональная</h2></div>
                                            <div class="type__time">1 час</div>
                                            <div class="type__price">от 4500Р</div>
                                        </div>
                                        <div class="group animation">
                                            <div class="type__title"><h2>Групповая</h2></div>
                                            <div class="type__time">2 часа</div>
                                            <div class="type__price">от 5000Р</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple__txt txt2">
                                    <h2>Где проходят занятия</h2>
                                    <p>Проводим тренировки на специализированных закрытых автодромах</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="OFirst ">
                <div class="container">
                    <div class="O__number animation">
                        02
                    </div>
                    <div class="container__small " id="speed">
                        <div class="Ofirst__title title animation">Скоростное маневрирование</div>
                        <div class="part__row">
                            <div class="Ofirst__part1 animation">
                                <div class="part__img animation">
                                    <img src="img/konus.svg">
                                </div>
                                <div class="part__txt ">
                                    <div class="double__par animation">
                                        <div class="txt1">
                                            <h2>Цель</h2>
                                            <p>Подготовится к применению контраварийных и спортивных приемов вождения.</p>
                                        </div>
                                        <div class="txt2">
                                            <h2>В результате</h2>
                                            <p>Вы узнаете, как реагирует автомобиль на экстренное руление, научитесь мгновенно менять ритм, скорость и характер действий от повседневных к экстренным в зависимости от дорожной ситуации.</p>
                                            <a href="#openModal">
                                                <button>записаться</button>
                                            </a>   
                                        </div>
                                    </div>
                                    <div class="txt3 animation">
                                        <h2>Как проходит<br>тренировка</h2>
                                        <p>Вы выполните ряд упражнений, позволяющие почувствовать поведение автомобиля в нетипичных условиях. Научитесь верно выбирать скорость входа в поворот, окончательно синхронизируете действия рук и ног во время движения.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Ofirst__part2">
                                <div class="info__txt">
                                    <div class="txt1 animation">
                                        <h2>Стоимость и длительность тренировки</h2>
                                        <p>Стоимость может варьироваться в зависимости от места проведения и автомобиля (школы или клиента)</p>
                                    </div>
                                    <div class="types animation">
                                        <div class="personal">
                                            <div class="type__title"><h2>Персональная</h2></div>
                                            <div class="type__time">1 час</div>
                                            <div class="type__price">от 4 500₽</div>
                                        </div>
                                        <div class="group">
                                            <div class="type__title"><h2>Групповая</h2></div>
                                            <div class="type__time">2 часа</div>
                                            <div class="type__price">от 5 000₽</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple__txt txt2 animation">
                                    <h2>Где проходят занятия</h2>
                                    <p>Проводим тренировки на специализированных закрытых автодромах, используем конусы и рации:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="OFirst">
                <div class="container">
                    <div class="O__number animation">
                        03
                    </div>
                    <div class="container__small" id="rulenie">
                        <div class="Ofirst__title title animation">Техника руления</div>
                        <div class="part__row">
                            <div class="Ofirst__part1">
                                <div class="part__img animation">
                                    <img src="img/gamer.svg">
                                </div>
                                <div class="part__txt">
                                    <div class="double__par animation">
                                        <div class="txt1">
                                            <h2>Цель</h2>
                                            <p>Научиться быстро и точно вращать руль</p>
                                        </div>
                                        <div class="txt2">
                                            <h2>В результате</h2>
                                            <p>Вы изучите техники эффективного руления, повысите точность экстренных маневров и изрядно облегчите повседневное вождение.</p>
                                            <a href="#openModal">
                                                <button>записаться</button>
                                            </a>   
                                        </div>
                                    </div>
                                    <div class="txt3 animation">
                                        <h2>Как проходит<br>тренировка</h2>
                                        <p>Отработка навыков происходит на специальном рулевом тренажёре и на автомобиле. Совершите более 500 движений рулём.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Ofirst__part2">
                                <div class="info__txt animation">
                                    <div class="txt1 ">
                                        <h2>Стоимость и длительность тренировки</h2>
                                    </div>
                                    <div class="types">
                                        <div class="group">
                                            <div class="type__time">2 часа</div>
                                            <div class="type__price">от 4 000₽</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple__txt txt2 animation">
                                    <h2>Место встречи</h2>
                                    <p>улица Строителей, Йошкар-Ола (возможен выезд)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="OFirst">
                <div class="container">
                    <div class="O__number animation">
                        04
                    </div>
                    <div class="container__small">
                        <div class="Ofirst__title title animation">Индивидуальная программа</div>
                        <div class="part__row">
                            <div class="Ofirst__part1">
                                <div class="part__img animation">
                                    <img src="img/gonka.svg" style="width: 80%;">
                                </div>
                                <div class="part__txt">
                                    <div class="double__par ">
                                        <div class="txt1 animation">
                                            <h2>Цель</h2>
                                            <p>Освоить контрававарийную, спортивную и «экстремальную» езду, обучившись приемам вождения на индивидуальных занятиях с тренером.</p>
                                        </div>
                                        <div class="txt2 animation">
                                            <h2>В результате</h2>
                                            <p>Успешное применение спортивных навыков в повседневном вождении, развитие водительской интуиции - умения предвидеть развитие ситуации на дороге, способность нейтрализовывать опасные моменты с помощью контраварийных приемов или вовсе избегать их.</p>
                                            <a href="#openModal">
                                                <button>записаться</button>
                                            </a>   
                                        </div>
                                    </div>
                                    <div class="txt3 animation">
                                        <h2>Как проходит<br>тренировка</h2>
                                        <p>Перед обучением вы пройдете специальное тестирование на дороге общего пользования, для того чтобы тренер смог определить уровень вашего водительского мастерства и предложить последовательность и темп прохождения индивидуальной программы обучения. Для обучения могут использоваться дороги общего пользования, автодромы, кольцевые профессиональные трассы, а также тренировки в картинге.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Ofirst__part2">
                                <div class="info__txt ">
                                    <div class="txt1 animation">
                                        <h2>Стоимость и длительность тренировки</h2>
                                        <p>Стоимость может варьироваться в зависимости от места проведения и автомобиля (школы или клиента)</p>
                                    </div>
                                    <div class="types animation">
                                        <div class="personal">
                                            <div class="type__title"><h2>Персональная</h2></div>
                                            <div class="type__time">2 часа</div>
                                            <div class="type__price">от 4 000Р</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple__txt txt2 animation">
                                    <h2>Где проходят занятия</h2>
                                    <p>Место встречи по договоренности</p>
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
    </div>
</body>
<script src="js/main.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" rel="shortcut icon" href="img/Vector.svg">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/o_nas.css">
    <link rel="stylesheet" href="css/adaptation.css">
    <link rel="stylesheet" href="css/da.css">
    <link rel="stylesheet" href="css/zvonok.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <a href="index.php" class="brand"><img src="img/logo.svg"></a>
        <nav class="nav">
            <li><a href="students.php" class="li_a">Для учеников</a></li>
            <li><a href="noob.php" class="li_a">Для начинающих</a></li>
            <li><a href="skill.php" class="li_a">Для опытных</a></li>
            <li><a href="" class="li_a" style="color: black">О нас</a></li>
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
    <section class="Upper_head">
        <h1 class="head animated fadeInDown">Цель обучения - не накат, а тренировка реальных навыков</h1>
        <div class="Upper ">
            <div>
                <img src="img/chel.svg" class="animated fadeInLeft chel">
            </div>
            <div class="block">
                <div class="blocks_upper">
                    <div class="upper_block_one  animated fadeInUp ">
                        <h1 class="upper_one">Повышаем мастерство опытных водителей и спортсменов</h1>
                        <h1 class="upper_one_two">Проводим обучение по контраварийной подготовке, действиям в
                            экстремальных ситуациях. Тренируем спортсменов.</h1>
                    </div>
                    <div class="upper_block_two  animated fadeInUp ">
                        <h1 class="upper_two">Каждое занятие — это симбиоз теории и практики</h1>
                        <h1 class="upper_two_two">В деталях разбираем упражнения и тренируем самостоятельно принимать
                            решения во время вождения.</h1>
                    </div>
                </div>
                <div class="upper_block_three animation">
                    <h1 class="upper_three">Адаптируем после автошколы</h1>
                    <h1 class="upper_three_two">Для безопасного передвижения по городским улицам, на скоростном шоссе,
                        на парковке среди реальных автомобилей. Обучаем как на автомобиле с механической, так и с
                        автоматической коробкой передач.</h1>
                </div>
            </div>
        </div>


    </section>
    <section class="how_we_teach">
        <div class="teach_heading">
            <h1 class="teach_heading_one animation">Ключевой принцип тренировок — безопасное вождение. Оно основано на
                управлении
                автомобилем без ошибок.</h1>
            <h1 class="teach_heading_two animation">Как мы обучаем</h1>
        </div>
        <div class="teach_content">
            <div>
                <img src="img/sozdatel.svg" class="animation foto">
            </div>
            <div class="teach_content_text animation">
                <h1 class="teach_text_one animation">ПРЯМАЯ РЕЧЬ</h1>
                <h1 class="teach_text_two animation">"Поработав в компаниях, которые обучают профессиональных водителей,
                    я увидел
                    ошибки в вождении,
                    которые тянутся с автошколы. По этой причине стал обучать безопасному вождению с нулевого уровня,
                    чтобы в зачатке искоренить эти проблемы.<br>
                    <br>
                    Для корпоративных водителей международных компаний предусмотрены курсы повышения квалификации, что
                    обусловлено корпоративной политикой данных компаний. Но даже такие курсы из-за их краткосрочности не
                    раскрывают всю глубину безопасного вождения. А опыт не проходивших курсы водителей основан на
                    школьных навыках и личном опыте.”
                </h1>
                <h1 class="teach_text_three animation">Дмитрий Портнягин</h1>
                <h1 class="teach_text_four animation">Основатель</h1>
            </div>
        </div>
    </section>

    <?php
    include_once('footerAndModal.php');
    ?>

    <section class="footer">
        <div style="display: flex; justify-content: space-between;">
            <div>
                <div class="footer_logo">
                    <h1 class="footer_logo_text">STREET RACING</h1>
                    <h1 class="footer_logo_content">Школа дополнительной подготовк водителей</h1>
                </div>
                <div class="foter_links">
                    <a href="#">для учеников</a>
                    <a href="#">для начинающих</a>
                    <a href="#">для опытных</a>
                    <a href="#">контакты</a>
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
                <a href="#openModal">заказать звонок</a>
            </div>
        </div>
    </section>
</body>
<script src="js/main.js"></script>

</html>
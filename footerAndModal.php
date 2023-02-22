<div class="popup__bg">
    <a class="close-popup">
    </a>
    <div class="form">
        <div class="popup">
            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Регистрация</a></li>
                <li class="tab"><a href="#login">Вход</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">
                    <h1 style="color: white">Зарегистрируйтесь</h1> <br>

                    <form action="auth/reg.php" method="POST">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label class="labelModal" style="max-width:97.5%;">
                                    ИМЯ<span class="req">*</span>
                                </label>
                                <input type="text" name="fstn" required autocomplete="off" />
                            </div>


                        </div>

                        <div class="field-wrap" style="margin-top: 5%;">
                            <label class="labelModal" style="max-width:97.5%;">
                                ТЕЛЕФОН<span class="req">*</span>
                            </label>
                            <input type="tel" name="tel" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label class="labelModal" style="max-width:97.5%;">
                                ПАРОЛЬ<span class="req">*</span>
                            </label>
                            <input type="password" name="password" required autocomplete="off" />
                        </div>

                        <button type="submit" class="button button-block" />
                        ПОЕХАЛИ</button>

                    </form>

                </div>

                <div id="login">
                    <h1 style="color: white">С возвращением!</h1><br>

                    <form action="auth/login.php" method="POST">

                        <div class="field-wrap">
                            <label class="labelModal">
                                Телефон<span class="req">*</span>
                            </label>
                            <input type="tel" name="tel" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label class="labelModal">
                                ПАРОЛЬ<span class="req">*</span>
                            </label>
                            <input type="password" name="password" required autocomplete="off" />
                        </div>

                        <button class="button button-block" />
                        ВОЙТИ</button>

                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

<!-- модальное окно звонок -->
<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close"> <img src="img/X.svg"></a>
        <p class="modalP">Заказать обратный звонок</p><br>
        <div id="message">
            <p style="font-family: Jura;">Введите свои данные ниже, и один из наших сотрудников свяжется с вами как можно скорее</p>
            <div class="inputFlex">

                <form name="contact" action="">
                    <div class="inputFlexColumn">
                        <div class="inputFlexItem">
                            <div class="inputFlexItemColumn">
                                <input type="text" name="FIO" id="FIO" placeholder="Ваше имя" required style="font-family: Jura;">
                                <label class="error" for="FIO" id="FIO_error"><br><b>Введите ваше имя</b> </label>
                            </div>
                            <div class="inputFlexItemColumn">
                                <input type="text" name="telephone" id="telephone" placeholder="Номер телефона" required style="font-family: Jura;">
                                <label class="error" for="telephone" id="telephone_error"> <br><b>Номер телефона в формате +7</b> </label>
                                <label class="error" for="telephone" id="telephone_error_length"> <br><b>Длина номера 11 цифр</b> </label>
                            </div>
                        </div>
                        <button type="submit" class="buttonQuery" name="btnSubmit" id="submit_btn">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</button><br><br>
                    </div>
                </form>

            </div>
            <p style="font-family: Jura;">Нажимая кнопку "Заказать обратный звонок" вы принимает пользовательское соглашение.</p>
        </div>
    </div>
</div>

<script src="js/main.js"></script>
<script src="js/modal.js"></script>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/zvonokVerify.js"></script>
<script src="js/script.js"></script>

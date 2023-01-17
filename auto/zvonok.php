<button> <a href="#openModal" style="text-decoration:none; color:black"> Модальное окно </a> </button>

<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Заказать обратный звонок</h2>
        <p>Введите свои данные ниже, и один из наших сотрудников свяжется с вами как можно скорее</p>
        <form action="zvonokRedirect.php" method="post">
            <input type="text" name="name" placeholder="Ваше имя" required >
            <input type="text" name="phone" placeholder="Номер телефона" required> <br>
            <button type="submit">Заказать обратный звонок</button>
        </form>
        <p>Нажима кнопку "Запросить обратный звонок" вы принимаете наши хуи ГАГАГАГАА</p>
    </div>
</div>

<style>
    .modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        display: none;
        pointer-events: none;
    }
    .modalDialog:target {
        display: block;
        pointer-events: auto;
    }
    .modalDialog > div {
        width: 500px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: white;
        border: 2px solid black;
    }
    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }

    .close:hover { background: gray; }
</style>

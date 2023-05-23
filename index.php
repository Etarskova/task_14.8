<?php
session_start();
include 'functions.php';
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
<title>SPA-салон</title>
<link rel="stylesheet" href="style.css">
<script scr="index.js"></script>
</head>


<header>
    <h1>SPA-оазис Волшебная сакура</h1>
        <div class="user-login">
            <?php
                if (isset($_SESSION['authorized'])) {
                    echo '<div class="login">
                          <a class="login_text" href="#">' . getCurrentUser() . '</a>
                          <a class="log_out" href="pages/logout.php">Выйти</a>
                        </div>';
                } else {
                    echo '<div class="login">
                        <a class="sign_in" href="pages/login.php">Войти</a>
                        </div>';
                    }
            ?>
        </div>
</header>

<body>

    <div class="container">

<div class="user-info">
    <?php
    if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
        echo '<h2 class = "introduction_user">Здравствуйте,' . ' ' . getCurrentUser() . '!</h2>';
        if ($_SESSION['checkDayBirth'] > 0) {
            echo '
<div class = "introduction_day_brth">
<p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
</div>';
        } else if ($_SESSION['checkDayBirth'] === 0) {
            echo '
<div class = "introduction_day_brth">
<p> Поздравляем Вас с Днем Рождения! В честь этого мы подготовили для вас специальную акцию!</p>
</div>';
        }
    }
    ;
    ?>
</div>


    <section class="Prog">
        <article>
            <a>
                <h2>Стоун-массаж (стоунтерапия)</h2>
            </a>
            <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80">
            <p>Стоун-терапия – это лечение с применением разных видов камней ( от английского слова «stone»). Целебные свойства самоцветов используются в медицине несколько тысячелетий. В наши дни стоун-терапия получила официальное признание. <br>Кроме того, считается, что на организм благотворно действует энергетика самого камня. С помощью литотерапии можно получить локальный эффект без риска общего перегрева или переохлаждения. Процедуры не перегружают сердечно-сосудистую систему, как баня или сауна. Они показаны мужчинам и женщинам практически любого возраста.</p>
        </article>

        <article>
            <a>
                <h2>Массаж теплым маслом для пары</h2>
            </a>
            <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80">
            <p>Расслабляющий массаж всего тела с применением теплого масла для пары одна из самых приятных и эффективных процедур!<br>Эффект от массажа - быстрое восстановление и прилив сил, нормализация сна, устранение депрессии. Придание тонуса атрофированным мышцам, эластичности и снятие напряжения с перетруженных и забитых мышц. Массаж и внимание получит каждый сантиметр тела, от кончиков пальцев до макушки.</p>
        </article>

        <article>
            <a>
                <h2>Массаж мешочками с теплым морским песком</h2>
            </a>
            <img src="https://plus.unsplash.com/premium_photo-1661683173972-6b29e9b7ed7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80">
            <p>Массаж мешочками с теплым песком помогает вернуть силы после напряженной работы, а также восстановиться после перенесенных заболеваний. Во время массажа массажист прорабатывает кожу, мышцы и ткани пациента с помощью мешочков, наполненных теплым морским песком. В результате ткани глубоко прогреваются, в них активизируются метаболические процессы, улучшается кровообращение, клетки насыщаются кислородом и полезными веществами.</p>
        </article>

    </section>

    <section class="spa_action">
                        <div class="action_container">
                            <div class="actions">
                                <h2 class="action_title">Акции</h2>
                                <div class="action_card">
                                    <div class="action_card_content">
                                        <h2 class="action_card_title">Для новых посетителей</h2>
                                        <div class="action_card_text">
                                            <p>При первом визите в салон массаж рук в подарок! <br>Побалуйте себя расслабляющей процедурой, которая погрузит Вас в состояние покоя и наслаждения!</p>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['authorized']) && $_SESSION['checkDayBirth'] === 0) {
                                    echo '
                                    <div class="action_card">
                                      <div class="action_card_content">
                                        <h2 class="action_card_title">Специальная скидка в честь Вашего Дня Рождения!</h2>
                                          <div class="action_card_text">
                                            <p>Скидка 10% на все услуги нашего спа-салона!<br>Позвольте нам сделать Ваш особенный день еще более особенным!<br>Будем рады Вас видеть!</p>
                                        </div>
                                    </div>
                                </div>';
                                } else {
                                    echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Нега понедельника</h2>
                                    <div class="action_card_text">
                                        <p>Скидки до 10% каждый понедельник!<br>Пока весь мир спешит по своим делам, проведите незабываемый день в нашем салоне.</p>
                                    </div>
                                </div>
                        </div>';
                                } ?>
                            </div>
                        </div>
                    </section>
</body>

<footer>
    <div class="links">
        <a href="pages/photo.php">Фотогалерея</a>
        <a href="pages/contact.php">Контакты</a>
        <a href="pages/promotion.php">По вопросам рекламы</a>
    </div>
</footer>


</html>
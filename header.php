<header>
    <div class="menu">
        <div class="menu-inner">
            <div class="logo-menu">
                <img class="logo-main" src="" alt="" />
                <div class="txt-menu">
                    <nav class="maintxt">

                        <?php
                        if ($_SESSION['user']['role'] == 'user') {
                        ?>
                            <li><a href="add.php">Чем мы можем помочь?</a></li>
                            <li><a href="services.php">Услуги</a></li>
                            <li><a href="otzivi.php">Отзывы</a></li>
                            <li><a href="profile.php"> Личный кабинет</a></li>



                        <?php
                        } elseif (($_SESSION['user']['role'] == 'admin')) {
                        ?>
                            <li><a href="add.php">Чем мы можем помочь?</a></li>
                            <li><a href="services.php">Услуги</a></li>
                            <li><a href="otzivi.php">Отзывы</a></li>
                            <div class="brif">
                                <li><a href="adminka.php">Админ панель</a></li>
                            </div>
                        <?php
                        } else {
                        ?>
                            <li><a href="add.php">Чем мы можем помочь?</a></li>
                            <li><a href="services.php">Услуги</a></li>
                            <li><a href="otzivi.php">Отзывы</a></li>
                            <li><a href="index.php"> Войти в аккаунт</a></li>
                            <li><a href="register.php"> Регистрация</a></li>
                        <?php
                        }
                        ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="navbar">
    <div class="navbar__btn-toggle">
        <span></span>
    </div>

    <div class="navbar__menu">
        <ul>
            <li><a href="/index.php"><span class="fa fa-home"></span><span class="navbar__menu-item">Главная</span></a></li>
            <li><a href="/programming.php"><span class="fa fa-bars"></span><span class="navbar__menu-item">Программирование</span></a></li>
            <li><a href="/about-author.php"><span class="fa fa-user"></span><span class="navbar__menu-item">Обо мне</span></a></li>
            <li><a href="/contact-with-me.php"><span class="fa fa-envelope"></span><span class="navbar__menu-item">Связаться со мной</span></a></li>
            <?php
            if (is_admin($connect)) {
                echo '<li><a href="/admin-panel.php"><span class="fa fa-cogs"></span><span class="navbar__menu-item">Админ-панель</span></a></li>';
            }
            if (is_auth($connect)) {
                echo '<li><a href="#"><span class="fa fa-sign-out"></span><span class="navbar__menu-item" id="btn-logout">Выйти</span></a></li>';
            } else {
                echo '<li><a href="#"><span class="fa fa-sign-in"></span><span class="navbar__menu-item" id="btn-login">Войти</span></a></li>';
            }
            ?>

        </ul>
    </div>
</div>
<script src="https://use.fontawesome.com/c84370bc57.js"></script>

<script>
    $(function() {
        $('[href="' + location.pathname + '"]').parent("li").addClass("active-page");

        $("#btn-login").click(function() {
            const modalWindow = `
            <div class="auth_modal-window modal-window" id="auth_modal-window">
                <div class="auth_modal-window-content modal-window-content">
                    <button class="modal-window__btn-close" id="auth_modal-window__close">&times;</button>
                    <div class="auth_modal-window__header modal-window__header">
                        <h2>Вход</h2>
                    </div>
                    <div class="auth_modal-window__body modal-window__body">
                        <div class="auth_modal-window__create-account">
                            <span>У вас ещё нет аккаунта? <a class="auth_modal-window__registration" href="#">Зарегестрироваться</a></span>
                        </div>
                        <form action="/account/authorization.php" class="auth_modal-window__form modal-window__form" class="form-auth" method="POST">
                            <input type="email" class="input modal-window__form-input" name="email" placeholder="Email">
                            <input type="password" class="input modal-window__form-input" name="password" placeholder="Пароль">
                            <button name="submit" type="submit" class="btn blue btn-submit auth_modal-window__form-btn-submit">Войти</button>
                        </form>
                    </div>
                </div>
            </div>`;
            $("body").append(modalWindow);
        });
        $(document).on("click", '.auth_modal-window__registration', function(e) {
            e.preventDefault();
            $("body *").remove("#auth_modal-window");
            $("body").append(`
            <div class="reg_modal-window modal-window" id="reg_modal-window">
                <div class="reg_modal-window-content modal-window-content">
                    <button class="modal-window__btn-close" id="reg_modal-window__close">&times;</button>
                    <div class="reg_modal-window__header modal-window__header">
                        <h2>Регистрация</h2>
                    </div>
                    <div class="reg_modal-window__body modal-window__body">
                        <form class="reg_modal-window__form modal-window__form" action="/account/registration.php" class="form-reg" method="POST">
                            <input type="text" class="input modal-window__form-input" name="name" placeholder="Имя">
                            <input type="email" class="input modal-window__form-input" name="email" placeholder="Email">
                            <input type="password" class="input modal-window__form-input" name="password" placeholder="Пароль">
                            <button type="submit" name="submit" class="btn blue btn-submit reg_modal-window__form-btn-submit">Зарегистрироваться</button>
                        </form>
                    </div>
                </div>
            </div>`);
            $.validator.addMethod("validatePassword",
                function(value) {
                    const reg = /^[a-z_0-9.-]+$/ig;
                    return reg.test(value);
                }, "Пароль может содержать только символы латинского алфавита, цифры, нижнее подчёркивание тире и точку"
            );
            $(".reg_modal-window__form").validate({
                errorClass: "error-message-validate",
                rules: {
                    password: {
                        minlength: 8,
                        required: true,
                        validatePassword: true
                    }
                },
                messages: {
                    password: {
                        required: "Поле пароль обязательно для заполнения",
                        minlength: "Пароль должен быть не менее восьми символов"
                    }
                }
            });

        })



        $('.reg_modal-window__form').on("submit", function(e) {
            e.preventDefault();
            let form_data = $(this).serialize();
            console.log(form_data);
            $.ajax({
                url: '/account/registration.php',
                method: 'post',
                data: form_data,
                beforeSend: function() {
                    // createLoader(clickedForm);
                },
                success: function(data) {

                    // $(".loading").remove();
                    switch (data) {
                        case '1':
                            location.reload();
                            break;
                        default:
                            console.log(data);
                    }
                }
            })
        });

        // Выход из аккаунта
        $('#btn-logout').on("click", function(e) {
            e.preventDefault();
            let form_data = $(this).serialize();
            console.log(form_data);
            $.ajax({
                url: '/config/functional/log_out.php',
                method: 'post',
                data: form_data,
                // beforeSend: function() {
                //     // createLoader(clickedForm);
                // },
                success: function(data) {
                    location.reload();
                }

            })
        });


        $('.navbar__btn-toggle').click(function() {
            $('.navbar__btn-toggle').toggleClass('open-menu');
            $('.navbar__menu').toggleClass('open-menu');
            $('body').toggleClass('fixed-page');
        });


        $(document).on("click", '.modal-window__btn-close', function() {
            $("body *").remove(".modal-window");
            console.log("32");
        })
    })
</script>
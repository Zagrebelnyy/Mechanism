$(function () {
    $("#btn-auth_modal-window").click(function () {
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
                        <form class="auth_modal-window__form modal-window__form" action="authorization.php" class="form-auth">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Пароль">
                            <button type="submit" class="btn blue btn-submit auth_modal-window__form-btn-submit">Войти</button>
                        </form>
                    </div>
                </div>
            </div>`;
        $("body").append(modalWindow);
    });
    $(document).on("click", '.auth_modal-window__registration', function (e) {
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
                        <form class="reg_modal-window__form modal-window__form" action="registration.php" class="form-reg">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Пароль">
                            <button type="submit" class="btn blue btn-submit reg_modal-window__form-btn-submit">Зарегистрироваться</button>
                        </form>
                    </div>
                </div>
            </div>`
        );

    })

    $(document).on("click", '.modal-window__btn-close', function () {
        $("body *").remove(".modal-window");
        console.log("32");
    })
})
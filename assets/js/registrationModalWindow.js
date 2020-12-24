$(function () {
    $("#btn-reg_modal-window").click(function () {
        const modalWindow = `
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
                            <input type="password" name="password-confirm" placeholder="Пароль">
                            <button type="submit" class="btn blue reg_modal-window__form-btn-submit">Войти</button>
                        </form>
                    </div>
                </div>
            </div>`;
        $("body").append(modalWindow);
    });

    $("#auth_modal-window__close").click(function(){
        $("body").remove(".reg_modal-window");
    })
})
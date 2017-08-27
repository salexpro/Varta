<div class="modal fade bs-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{ url('test/personal') }}">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fixi-reg">&times;</span></button>
                    <h4 class="modal-title fixi-reg ">вход в личный кабинет</h4>
                </div>
                <div class="modal-body">

                    <div class="row social">
                        <div class="col-md-12 text-center bebasneue-reg">
                            Зарегистрироваться через:
                            <a href="#"><img src="{{ asset('img/vk_white.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/fb_white.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/ok_white.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <label for="auth_email" class="bebasneue-reg">Email:</label>
                            <input class="bebasneue-reg" type="email" id="auth_email" placeholder="Укажите Email">
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label for="auth_password" class="bebasneue-reg">Пароль:</label>
                            <input class="bebasneue-reg" type="password" id="auth_password" placeholder="******">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-4 text-left forgot">
                            <a class="bebasneue-reg" data-dismiss="modal" data-toggle="modal" data-target="#forgot" href="#">забыли пароль?</a>
                        </div>
                        <div class="col-md-6">
                            <input class="white" type="checkbox" id="remember_me">
                            <label class="bebasneue-reg" for="remember_me">запомнить</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row text-center">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="fixi-reg">
                                <button type="submit" class="fixi-button white">войти</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fixi-reg">&times;</span></button>
                <h4 class="modal-title fixi-reg ">восстановление пароля</h4>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <label for="auth_email" class="bebasneue-reg">Email:</label>
                        <input class="bebasneue-reg" type="email" id="auth_email" placeholder="Укажите Email">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="fixi-reg">
                            <button class="fixi-button white">отправить пароль</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

<div class="modal fade bs-example-modal-lg" id="notice" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fixi-reg">&times;</span></button>
                <h4 class="modal-title fixi-reg ">ураа!</h4>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-12 text-center bebasneue-reg">
                        Поздравляем! <br>
                        Вы выиграли гироскутер.
                        Для получения приза необходимо дозаполнить данные в личном кабинете.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="fixi-reg">
                            <button type="submit" class="fixi-button white">дрыц-тыц!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

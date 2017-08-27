<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Varta</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 logo">

            </div>
            <div class="col-md-8 bebasneue-reg">
                <ul>
                    <li>Правила и призы</li>
                    <li>Регистрация</li>
                    <li>Победители</li>
                    <li>Обратная связь</li>
                    <li data-toggle="modal" data-target="#notice">FAQ</li>
                    <li data-toggle="modal" data-target="#login">Где купить</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
<div class="fixics">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="fixic" src="{{ asset('img/fixics.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 bebasneue-reg">
                        Если у вас возникли какие-либо вопросы, <br>
                        Вы можете написать нам на почту fixiki@varta-consumer.ru
                    </div>
                    <div class="col-md-12 logo">
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <a href="#"><img src="{{ asset('img/vk.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/fb.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/ok.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
@yield('scripts')
@include('html.modals')
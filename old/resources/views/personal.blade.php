@extends('html.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
@stop
@section('content')
<div class="container personal bebasneue-reg">
    <div class="row">
        <div class="col-md-12 text-center fixi-reg"><h4>личный кабинет</h4></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            Здравствуйте, Ольга Валерьевна
        </div>
        <div class="col-md-3 text-right"><a href="{{ url('test') }}">Выйти</a></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            Личные данные:
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <dl class="dl-horizontal">
                <dt>Фамилия:</dt>
                <dd>Семенова</dd>
                <dt>Имя:</dt>
                <dd>Ольга</dd>
                <dt>Отчество:</dt>
                <dd>Валерьевна</dd>
                <dt>Email:</dt>
                <dd>olga.s@gmail.com</dd>
                <dt>Телефон:</dt>
                <dd>+7 910 392 43 87</dd>
            </dl>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12  text-left">
                    Вам осталось зарегистрировать <span class="orange">2 кода</span> для участия в розыгрыше главного приза
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="Введите код">
                </div>
                <div class="col-md-6">
                    <button class="fixi-reg" type="button">зарегистрировать</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            Мои коды:
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <dl class="dl-horizontal orange">
                <dt>12.12.2017</dt>
                <dd>1234567</dd>
                <dt>12.12.2017</dt>
                <dd>1234567</dd>
                <dt>12.12.2017</dt>
                <dd>1234567</dd>
            </dl>
        </div>
        <div class="col-md-3">
            <dl class="dl-horizontal orange">
                <dt>12.12.2017</dt>
                <dd>1234567</dd>
                <dt>12.12.2017</dt>
                <dd>1234567</dd>
            </dl>
        </div>
    </div>



    <div class="address">
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    Добавление данных для получения приза:
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="zip">Индекс:</label>
                </div>
                <div class="col-md-2">
                    <input id="zip" type="text" name="zip" placeholder="123456">
                </div>
                <div class="col-md-2">
                    <label for="region">Регион:</label>
                </div>
                <div class="col-md-2">
                    <input id="region" type="text" name="region" placeholder="Московская область">
                </div>
                <div class="col-md-2">
                    <label for="district">Район:</label>
                </div>
                <div class="col-md-2">
                    <input id="district" type="text" name="district" placeholder="Воскресенский">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="city">Город:</label>
                </div>
                <div class="col-md-2">
                    <input id="city" type="text" name="city" placeholder="Воскресенск">
                </div>
                <div class="col-md-2">
                    <label for="street">Улица:</label>
                </div>
                <div class="col-md-2">
                    <input id="street" type="text" name="street" placeholder="Поперечная">
                </div>
                <div class="col-md-2">
                    <label for="house">Дом/Корпус:</label>
                </div>
                <div class="col-md-1">
                    <input id="house" type="text" name="house" placeholder="125">
                </div>
                <div class="col-md-1">
                    <input id="corpus" type="text" name="corpus" placeholder="55">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    Дополнение к адресу:
                </div>
                <div class="col-md-2">
                    <label for="flat">Строение/Квартира:</label>
                </div>
                <div class="col-md-1">
                    <input id="building" type="text" name="building" placeholder="80">
                </div>
                <div class="col-md-1">
                    <input id="flat" type="text" name="flat" placeholder="117">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <textarea name="additional" id="additional" placeholder="Дополнение"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Паспортные данные:
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <label for="number1">Серия:</label>
                </div>
                <div class="col-md-1">
                    <input id="number1" type="text" name="number1" placeholder="5269">
                </div>
                <div class="col-md-1">
                    <label for="number2">Номер:</label>
                </div>
                <div class="col-md-1">
                    <input id="number2" type="text" name="number2" placeholder="325678">
                </div>
                <div class="col-md-2">
                    <label for="issued_by">Кем выдан:</label>
                </div>
                <div class="col-md-5">
                    <input id="issued_by" type="text" name="issued_by" placeholder="Воскресенским УВД Московской Области">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="issued_when">Дата выдачи:</label>
                </div>
                <div class="col-md-2">
                    <input id="issued_when" type="text" name="issued_when" placeholder="12.05.2003">
                </div>
                <div class="col-md-2">
                    <label for="code">Код подразделения:</label>
                </div>
                <div class="col-md-2">
                    <input id="code" type="text" name="code" placeholder="105-523">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="adress">Адрес прописки:</label>
                </div>
                <div class="col-md-4">
                    <textarea name="adress" id="adress" placeholder="Адрес прописки"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="scan">Скан паспорта:</label>
                </div>
                <div class="col-md-3">
                    <input disabled id="scan" type="text" placeholder="">
                </div>
                <div class="col-md-2">
                    <input name="file" type="file">
                    <label class="text-center fixi-reg" for="file">Обзор</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button class="fixi-reg" type="button">добавить</button>
                </div>
            </div>
        </form>
    </div>

</div>
@stop

@section('scripts')
@stop
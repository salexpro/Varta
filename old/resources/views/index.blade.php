@extends('html.layout')
@section('content')
    <img data-top="top:20%" data-bottom="top:40%" data-1000="top:50%" data-3000="top:50%"  data-200-end="top:70%;opacity: 1.0" data-end="top:80%; opacity: 0.0" id="scroll" src="{{ asset('img/scroll.png') }}" alt="">
    <div class="pre-parallax pink">
        <div class="container welcome">
            <div id="dates" class="bebasneue-reg">04.09.2017 - 25.12.2017</div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/batteries.png') }}" alt="">
                    <a class="bebasneue-reg" href="#">Подробнее узнать о наших продуктах</a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/fixiki_center.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/mechanics.png') }}" alt="">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-md-offset-4">
                    <a class="fixi-reg" href="#">
                        <div class="fixi-button">зарегистрировать код</div>
                    </a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 akrobat-reg">
                    Стимулирующее мероприятие действует на территории РФ. Не является лотереей. Подробные правила проведения, информация об организаторе, количестве призов, сроках, месте и порядке их получения размещены на сайте www.varta-consumer.ru.
                </div>
            </div>
        </div>
    </div>

    <div data-bottom-top="background-position-y: 0%;" data-center-top="background-position-y: 30%;" data-top-bottom="background-position-y: 60%;"  class="simka-parallax">

    </div>

    <div style="width: 100%; height: 2400px; color:#fff"></div>
    <div data-0="display:none" data-400="display:block; top:110%;" data-1000="top:8%;" data-3000="top:8%;" data-3750="top:-110%;"  data-3850="top:-150%;" class="post-parallax cyan pre-parallax orange">
        <div class="container mechanics">
            <div class="row">
                <div class="col-md-4 yellow bebasneue-reg">
                    <img src="{{ asset('img/1.png') }}" alt="">
                    <div class="caption">Покупай батарейки <strong>VARTA</strong> с фиксиками</div>
                </div>
                <div class="col-md-4 yellow bebasneue-reg">
                    <img src="{{ asset('img/2.png') }}" alt="">
                    <div class="caption">Регистрируй промокоды</div>
                </div>
                <div class="col-md-4 orange bebasneue-reg">
                    <img src="{{ asset('img/3.png') }}" alt="">
                    <div class="caption">Выигрывай призы</div>
                </div>
            </div>

            <div class="row prizes">
                <div data-0="display:block" data-1000="display:block;" data-1500="display:none" class="item">
                    <div class="col-md-4 text-center">
                        <div class="title code fixi-reg">1 код</div>
                        <img class="code" src="{{ asset('img/1code.png') }}" alt="">
                    </div>
                    <div class="col-md-4 arrow">
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="title fixi-reg">3d раскраска</div>
                        <img class="prize" src="{{ asset('img/1prize.png') }}" alt="">
                    </div>
                </div>
                <div data-0="display:none" data-1500="display:block;" data-2000="display:none" class="item">
                    <div class="col-md-4 text-center">
                        <div class="title code fixi-reg">2 кода</div>
                        <img class="code" src="{{ asset('img/2code.png') }}" alt="">
                    </div>
                    <div class="col-md-4 arrow">
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="title fixi-reg">игра</div>
                        <img class="prize" src="{{ asset('img/2prize.png') }}" alt="">
                    </div>
                </div>
                <div data-0="display:none" data-2000="display:block;" data-2500="display:none" class="item">
                    <div class="col-md-4 text-center">
                        <div class="title code fixi-reg">3 кода</div>
                        <img class="code" src="{{ asset('img/3codes.png') }}" alt="">
                    </div>
                    <div class="col-md-4 arrow">
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="title fixi-reg">фонарик</div>
                        <img class="prize" src="{{ asset('img/3prize.png') }}" alt="">
                    </div>
                </div>
                <div data-0="display:none" data-2500="display:block;" class="item">
                    <div class="col-md-4 text-center">
                        <div class="title code fixi-reg">4 кода</div>
                        <img class="code" src="{{ asset('img/4codes.png') }}" alt="">
                    </div>
                    <div class="col-md-4 arrow">
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="title fixi-reg">гироскутер</div>
                        <img class="prize" src="{{ asset('img/4prize.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center bebasneue-reg">
                    С 4 сентября 2017 года по 25 декабря 2017 года при покупке от 1 упаковки стикерованного продукта покупатель получает возможность стать обладателем призов и выиграть главный приз <span class="prize">— гироскутер.</span> Розыгрыш проходит еженедельно. Спешите принять участие!
                </div>
            </div>
            <div class="row bebasneue-reg text-center">
                <h4>Правила акции</h4>
            </div>
            <div class="row akrobat-reg">
                <div class="col-md-6">
                    Если предварительно подвергнуть объекты длительному вакуумированию, то призма испускает плоскополяризованный атом как при нагреве, так и при охлаждении. Многочисленные расчеты предсказывают, а эксперименты подтверждают, что пульсар переворачивает взрыв. Исследователями из разных лабораторий неоднократно наблюдалось, как разрыв ускоряет гамма-квант. Течение среды конфокально тормозит.
                </div>
                <div class="col-md-6">
                    Фронт поглощает экранированный квазар. Среда параллельна. Зеркало концентрирует плоскополяризованный взрыв. В литературе неоднократно описано, как среда инструментально обнаружима. Многочисленные расчеты предсказывают, а эксперименты подтверждают, что темная материя коаксиально вращает лептон, даже если пока мы не можем наблюсти это непосредственно. Объект оптически стабилен.
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bebasneue-reg text-center"><a href="#">Скачать полные правила (PDF)</a></div>
            </div>
        </div>
    </div>


    <div data-bottom-top="background-position-y: 0%;" data-center-top="background-position-y: 30%;" data-top-bottom="background-position-y: 60%;" class="monster-parallax">

    </div>

    <div class="post-parallax pre-parallax blue green">
        <div class="container faq">
            <div class="row">
                <div class="col-md-12 text-center fixi-reg">
                    <h4>вопроСы и Ответы</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 akrobat-reg">
                    <ul>
                        <li class="question">Отклонение трансформирует гравитационный стабилизатор, исходя из общих теорем механики?</li>
                        <li class="answer">Устойчивость горизонтальна. Гировертикаль трансформирует нестационарный момент силы трения, что обусловлено гироскопической природой явления.</li>
                        <li class="question">Отклонение трансформирует гравитационный стабилизатор, исходя из общих теорем механики?</li>
                        <li class="answer">Устойчивость горизонтальна. Гировертикаль трансформирует нестационарный момент силы трения, что обусловлено гироскопической природой явления.</li>
                        <li class="question">Отклонение трансформирует гравитационный стабилизатор, исходя из общих теорем механики?</li>
                        <li class="answer">Устойчивость горизонтальна. Гировертикаль трансформирует нестационарный момент силы трения, что обусловлено гироскопической природой явления.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div data-bottom-top="background-position-y: 0%;" data-center-top="background-position-y: 30%;" data-top-bottom="background-position-y: 60%;" class="verta-parallax"></div>

    <div class="post-parallax green">
        <div class="container winners">
            <div class="row">
                <div class="col-md-12 text-center fixi-reg">
                    <h4>пОбедители</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center bebasneue-reg search_title">Поиск победителей по email</div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="search"><input class="bebasneue-reg" type="email" placeholder="Введите email"><button class="fixi-reg" type="button">поиск</button><button class="fixi-reg" type="button">х</button></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table bebasneue-reg borderless">
                            <thead>
                            <tr>
                                <th>Дата</th>
                                <th>Email</th>
                                <th>Победитель</th>
                                <th>Приз</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Дата</td>
                                <td>Email</td>
                                <td>Победитель</td>
                                <td>Приз</td>
                            </tr>
                            <tr class="highlight">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Дата</td>
                                <td>Email</td>
                                <td>Победитель</td>
                                <td>Приз</td>
                            </tr>
                            <tr class="highlight">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Дата</td>
                                <td>Email</td>
                                <td>Победитель</td>
                                <td>Приз</td>
                            </tr>
                            <tr class="highlight">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Дата</td>
                                <td>Email</td>
                                <td>Победитель</td>
                                <td>Приз</td>
                            </tr>
                            <tr class="highlight">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Дата</td>
                                <td>Email</td>
                                <td>Победитель</td>
                                <td>Приз</td>
                            </tr>
                            <tr class="highlight">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Дата</td>
                                <td>Email</td>
                                <td>Победитель</td>
                                <td>Приз</td>
                            </tr>
                            <tr class="highlight">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container feedback">
        <div class="row">
            <div class="col-md-12 text-center fixi-reg">
                <h4>Обратная Связь</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="name_feedback" class="bebasneue-reg">Имя:</label>
                <input id="name_feedback" class="bebasneue-reg" type="text" placeholder="Укажите имя">
                <label for="email_feedback" class="bebasneue-reg">Email:</label>
                <input id="email_feedback" class="bebasneue-reg" type="email" placeholder="Укажите email">
            </div>
            <div class="col-md-8">
                <label for="thread_feedback" class="bebasneue-reg">Тема:</label>
                <input id="thread_feedback" class="bebasneue-reg" type="text" placeholder="Укажите тему">
                <textarea class="bebasneue-reg" placeholder="Сообщение"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="fixi-reg" type="button">отправить</button>
            </div>
        </div>
    </div>

    <div class="container map">
        <div class="row">
            <div class="col-md-12 text-center fixi-reg">
                <h4>гдЕ купить</h4>
            </div>
        </div>
        <div id="map" style="width:100%; height: 500px;" ></div>
    </div>

    <div class="container register">
        <div class="row">
            <div class="col-md-12 text-center fixi-reg">
                <h4>региСтрация</h4>
            </div>
        </div>
        <div class="row social">
            <div class="col-md-12 text-center bebasneue-reg">
                Зарегистрироваться через:
                <a href="#"><img src="{{ asset('img/vk2.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/fb2.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('img/ok2.png') }}" alt=""></a>
            </div>
        </div>
        <div class="row space-above">
            <div class="col-md-4">
                <label for="name_register" class="bebasneue-reg">Имя:</label>
                <input id="name_register" class="bebasneue-reg" type="text" placeholder="Укажите имя">
            </div>
            <div class="col-md-4 advice">
                <label for="email_register" class="bebasneue-reg">Email:</label>
                <input id="email_register" class="bebasneue-reg" type="email" placeholder="Укажите email">
                <img src="{{ asset('img/advice.png') }}" alt="">
            </div>
            <div class="col-md-4 advice">
                <label for="phone_register" class="bebasneue-reg">Телефон (логин):</label>
                <input id="phone_register" class="bebasneue-reg" type="tel" placeholder="+7 (___) ___-__-__">
                <img src="{{ asset('img/advice.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <label for="region_register" class="bebasneue-reg">Регион:</label>
                <select id="region_register" class="bebasneue-reg">
                    <option value="">Укажите регион</option>
                    <option value="">Регион</option>
                    <option value="">Регион</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="city_register" class="bebasneue-reg">Город/Район:</label>
                <select id="city_register" class="bebasneue-reg">
                    <option value="">Укажите город</option>
                    <option value="">город</option>
                    <option value="">город</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="bdate_register" class="bebasneue-reg">Дата рождения:</label>
                <select id="bdate_register" class="bebasneue-reg">
                    <option value="">Укажите дату рождения</option>
                </select>
            </div>
        </div>
        <div class="row space-above">
            <div class="col-md-4">
                <label for="sex_feedback" class="bebasneue-reg">Пол:</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input id="male" type="radio" name="sex_feedback" value="1">
                <label for="male" class="bebasneue-reg">Мужской</label>
                <input id="female" type="radio" name="sex_feedback" value="2">
                <label for="female" class="bebasneue-reg">Женский</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-left bebasneue-reg">
                *Все поля обязательны для заполнения
            </div>
        </div>
        <div class="row space-above">
            <div class="col-md-6">
                <input id="read1" type="checkbox" name="read_feedback" value="1">
                <label for="read1" class="bebasneue-reg">Я прочитал и согласен с правилами акции и пользовательским соглашением</label>
            </div>
            <div class="col-md-6">
                <input id="read2" type="checkbox" name="read_feedback" value="1">
                <label for="read2" class="bebasneue-reg">Я согласен получать информацию по SMS и Email</label>
            </div>
        </div>

        <div class="row space-above text-center">
            <div class="col-md-4 col-md-offset-4">
                <a class="fixi-reg" href="#">
                    <div class="fixi-button">зарегистрироваться</div>
                </a>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('vendor/skrollr/dist/skrollr.min.js') }}"></script>
    <script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
    <script type="text/javascript">
        var s = skrollr.init({
            forceHeight: false,
            constants: {
                //fill the box for a "duration" of 150% of the viewport (pause for 150%)
                //adjust for shorter/longer pause
                box: '150p'
            }
        });

    </script>
    <script type="text/javascript">
        // Создает обработчик события window.onLoad
        YMaps.jQuery(function () {
            // Создает экземпляр карты и привязывает его к созданному контейнеру
            var map = new YMaps.Map(YMaps.jQuery("#map")[0]);

            // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
            map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 10);
        })
    </script>
@stop
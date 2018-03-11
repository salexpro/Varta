/*
@codekit-prepend '../node_modules/jquery/dist/jquery.min';
@codekit-prepend '../node_modules/bootstrap/dist/js/bootstrap.min';
@codekit-prepend '../node_modules/skrollr/dist/skrollr.min';
@codekit-prepend '../node_modules/owl.carousel/dist/owl.carousel.min';
@codekit-prepend '../node_modules/pickadate/lib/picker';
@codekit-prepend '../node_modules/pickadate/lib/picker.date';
@codekit-prepend '../node_modules/jquery-validation/dist/jquery.validate.min';
@codekit-prepend '../node_modules/jquery.inputmask/dist/jquery.inputmask.bundle';
*/

if($(window).width() >= 1230){
    if($('.scroller').length){
        var s = skrollr.init({
            forceHeight: false,
            constants: {
                //fill the box for a "duration" of 150% of the viewport (pause for 150%)
                //adjust for shorter/longer pause
                box: '150p'
            }
        });
    };
}

// Шапка
$(window).scroll(function() {
    if($(window).scrollTop() > 20){
        $('.header').addClass('minimized');
    } else {
        $('.header').removeClass('minimized');
    }
});

if($('.welcome').length){
    var sections = ['welcome','prizes','faq','winners','feedback','map','register'];
    var curr_el  = 0;

    $('#navbar a:not([data-toggle]), .modal_form_footer a:not([data-toggle]), .logo, .scroller').click(function(e){
        e.preventDefault();
        if($(this).hasClass('scroller')){
            var target = sections[curr_el+1];
        } else {
            var target = $(this).attr('href').substr(1);
        }
        var offset = (target!=='') ? $('#' + target).offset().top : 0;
        curr_el = target ? sections.indexOf(target) : 0;
        $('html, body').animate({ 
            scrollTop: offset
        }, 500);
        if(curr_el==6){
            $('.scroller').addClass('end');
        } else {
            $('.scroller').removeClass('end');
        }
    });

    $(window).scroll(function() {
        $('.scroller').addClass('scrolling');
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function() {
            $('.scroller').removeClass('scrolling');
        }, 500));
    });
}

$('.hamb').click(function(){
    $(this).toggleClass('opened');
    $('.header').toggleClass('opened');
})

// Призы
if($('.owl-carousel').length){
    $('.owl-carousel').owlCarousel({
        nav: false,
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: false
    })
}

// Карта
if($('.map_container').length){
    YMaps.jQuery(function() {
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery(".map_container")[0]);
        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 10);
    })
}

// Валидаци форм
$.validator.addMethod("email", function(email, element) {
    return this.optional(element) || email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
}, 'Пожалуйста, введите корректный email');

$('[name="name"]').inputmask({
    mask: '[a{*}]',
    placeholder: '',
    definitions: {
        'a': {
            validator: '[АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЬЫЪЭЮЯабвгдеёжзийклмнопрстуфхцчшщьыъэюя]',
            cardinality: 1,
        }
    }
});

if($('.feedback').length){
    $('.feedback').validate({
        errorPlacement: function(error, element) {
            $(element).addClass('error')
        },
        success: function(label, element) {
            $(element).removeClass('error')
        },
        rules: {
            name: 'required',
            email: 'required',
            thread: 'required',
            message: 'required'
        },
        submitHandler: function(form) {
            return false;
        }
    });
}

// Календарь
$.extend($.fn.pickadate.defaults, {
    firstDay: 1,
    format: 'dd.mm.yyyy',
    today: '',
    clear: 'Очистить',
    close: 'Закрыть',
    monthsFull: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    monthsShort: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
    weekdaysFull: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
    weekdaysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
});

var today = new Date();
today.setDate(today.getDate() - (365 * 18 + 5)); 

$('[name="bdate"], [name="issued_date"]').pickadate({
    selectYears: 82,
    max: today
});

if($('.register').length){

    // Метод телефонв
    $.validator.addMethod("phoneRU", function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, '');
        return this.optional(element) || phone_number.length > 9 && 
        phone_number.match(/(\+7)([ .-]?)\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{2})([ .-]?)([0-9]{2})/);
    }, 'Пожалуйста, введите корректный номер');

    // Маски
    $('[name="phone"]').inputmask('+7 (999) 999-99-99', { 'placeholder': '_' });
    // $('[name="bdate"]').inputmask('99.99.9999', { 'placeholder': 'X' });

    $('.register').validate({
        errorPlacement: function(error, element) {
            if($(element).attr('type')!='checkbox'){
                $(element).addClass('error');
            } else {
                $(element).next().addClass('animated shake');
                setTimeout(function(){
                    $(element).next().removeClass('animated shake');
                }, 1200);
            }
        },
        success: function(label, element) {
            if($(element).attr('type')!='checkbox'){
                $(element).removeClass('error');
            } else {
                $(element).next().removeClass('animated shake');
            }
        },
        rules: {
            name: 'required',
            email: 'required',
            phone: {
                required: true,
                phoneRU: true
            },
            region: 'required',
            city: 'required',
            bday: 'required',
            rules: 'required'
        },
        submitHandler: function(form) {
            location.href='./profile.html';
            return false;
        }
    });
}

if($('#pr_form').length){
    $('[name="index"], [name="number"]').inputmask('999999', { 'placeholder': 'X' });
    $('[name="series"]').inputmask('9999', { 'placeholder': 'X' });
    $('[name="sub_code"]').inputmask('999-999', { 'placeholder': 'X' });

    $('#pr_form').validate({
        errorPlacement: function(error, element) {
            $(element).addClass('error')
        },
        success: function(label, element) {
            $(element).removeClass('error')
        },
        rules: {
            index: {
                required: true,
                number: true
            },
            region: 'required',
            district: 'required',
            city: 'required',
            street: 'required',
            house: 'required',
            room: 'required',
            series: {
                required: true,
                number: true
            },
            number: {
                required: true,
                number: true
            },
            issued_by: 'required',
            issued_date: 'required',
            sub_code: {
                required: true,
                minlength: 7
            },
            address: 'required',
            scan: 'required'
        },
        submitHandler: function(form) {
            return false;
        }
    });
}

// Загрузка файла в форме
$('label.file').change(function(){
    var file_name = $('[type="file"]',this)[0].files[0] ? $('[type="file"]',this)[0].files[0].name : 'Прикрепить файл';
    $('[type="text"]',this).val(file_name);
})

$('#login form').validate({
    errorPlacement: function(error, element) {
        $(element).addClass('error')
    },
    success: function(label, element) {
        $(element).removeClass('error')
    },
    rules: {
        email: 'required',
        password: 'required'
    },
    submitHandler: function(form) {
        location.href='./profile.html';
        return false;
    }
});

$('#forgot form').validate({
    errorPlacement: function(error, element) {
        $(element).addClass('error')
    },
    success: function(label, element) {
        $(element).removeClass('error')
    },
    rules: {
        email: 'required'
    },
    submitHandler: function(form) {
        alert('sd')
        return false;
    }
});

$('[data-toggle="tooltip"]').tooltip();

function pageWidget(pages) {
    var widgetWrap = $('<div class="widget_wrap"><ul class="widget_list"></ul><button class="widget_button"></button></div>');
    widgetWrap.prependTo('body');
    for (var i = 0; i < pages.length; i++) {
        $('<li class="widget_item"><a class="widget_link" href="' + pages[i] + '.html' + '">' + pages[i] + '</a></li>').appendTo('.widget_list');
    }
    var widgetStilization = $('<style>.widget_wrap{position:fixed;top:0;left:0;z-index:9999;padding:10px 20px;background:#222;border-bottom-right-radius:10px;-webkit-transition:all .3s ease;transition:all .3s ease;-webkit-transform:translate(-100%,0);-ms-transform:translate(-100%,0);transform:translate(-100%,0)}.widget_button{position:absolute;top:0;left:100%;width:24px;height:24px;border-radius:0;background-color:#222;cursor:pointer;outline:none;border:0}.widget_button:after{content:" ";position:absolute;top:0;left:0;width:100%;height:100%;background:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmlsbD0iI2ZmZiIgc3Ryb2tlPSJudWxsIiBkPSJtMTQuOTk1OTUsMTUuOTk1NjhsLTEzLjk5NjIyLDBjLTAuNTUyNiwwIC0wLjk5OTczLC0wLjQ0NzEzIC0wLjk5OTczLC0wLjk5OTczbDAsLTEzLjk5NjIyYzAsLTAuNTUyNiAwLjQ0NzEzLC0wLjk5OTczIDAuOTk5NzMsLTAuOTk5NzNsMTMuOTk2MjIsMGMwLjU1MjYsMCAwLjk5OTczLDAuNDQ3MTMgMC45OTk3MywwLjk5OTczbDAsMTMuOTk2MjJjMCwwLjU1MjYgLTAuNDQ3MTMsMC45OTk3MyAtMC45OTk3MywwLjk5OTczem0tMC45OTk3MywtMTMuOTk2MjJsLTExLjk5Njc2LDBsMCwxMS45OTY3NmwxMS45OTY3NiwwbDAsLTExLjk5Njc2em0tNi45OTgxMSw0Ljk5ODY1bC0yLjk5OTE5LDBsMCwtMi45OTkxOWwyLjk5OTE5LDBsMCwyLjk5OTE5em0wLDQuOTk4NjVsLTIuOTk5MTksMGwwLC0yLjk5OTE5bDIuOTk5MTksMGwwLDIuOTk5MTl6bTQuOTk4NjUsLTQuOTk4NjVsLTIuOTk5MTksMGwwLC0yLjk5OTE5bDIuOTk5MTksMGwwLDIuOTk5MTl6bTAsNC45OTg2NWwtMi45OTkxOSwwbDAsLTIuOTk5MTlsMi45OTkxOSwwbDAsMi45OTkxOXoiLz48L3N2Zz4=) no-repeat 50% 50%;animation: widget 5s ease-in-out 2s infinite backwards;}.widget_wrap.is_active{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.widget_wrap.is_active .widget_button:after{animation:none}.widget_list{list-style:none;padding:0;margin:0}.widget_link{display:block;color:#fff;text-decoration:none;font-size:15px;}.widget_link:hover{text-decoration:underline;color:blue}.widget_link:visited{color:purple}@keyframes widget{0%{transform:rotate(0deg)}20%{transform:rotate(180deg)}100%{transform:rotate(180deg)}}@media screen and (max-width:480px){.widget_wrap{top:auto;bottom:0;border-radius:0 10px 0 0}.widget_button{top:auto;bottom:0;width:35px;height:35px;}.widget_button:after{background-size:22px}}</style>');
    widgetStilization.prependTo('.widget_wrap');
    $('.widget_button').click(function () {
        $(this).parent().toggleClass('is_active');
    });
}

pageWidget(['index', 'profile']);
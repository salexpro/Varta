if($(window).width() >= 1230){
    if($('#scroll').length){
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
$(window).scroll(function(){
    if($(window).scrollTop() > 20){
        $('.header').addClass('minimized');
    } else {
        $('.header').removeClass('minimized');
    }
})
if($('.welcome').length){
    $('#navbar a:not([data-toggle]), .modal_form_footer a:not([data-toggle]), .logo').click(function(e){
        e.preventDefault();
        var target = $(this).attr('href').substr(1),
            offset = target ? $('#' + target).offset().top : 0;
        $('html, body').animate({ 
            scrollTop: offset
        }, 500);
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

if($('.register').length){
    // Маски
    $('[name="phone"]').inputmask('+7 (999) 999-99-99', { 'placeholder': '_' });
    // $('[name="bdate"]').inputmask('99.99.9999', { 'placeholder': 'X' });

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

    $('[name="bdate"]').pickadate({
        selectYears: 82,
        max: today
    });

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
            phone: 'required',
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

$('[data-toggle="tooltip"]').tooltip()
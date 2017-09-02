if($('#scroll').length){
    var s = skrollr.init({
        forceHeight: false,
        constants: {
            //fill the box for a "duration" of 150% of the viewport (pause for 150%)
            //adjust for shorter/longer pause
            box: '150p'
        }
    });
}

// Шапка
$(window).scroll(function(){
    if($(window).scrollTop() > 20){
        $('.header').addClass('minimized');
    } else {
        $('.header').removeClass('minimized');
    }
})

$('#navbar a:not([data-toggle]), .modal_form_footer a:not([data-toggle]), .logo').click(function(e){
    e.preventDefault();
    var target = $(this).attr('href').substr(1),
        offset = target ? $('#' + target).offset().top : 0;
    $('html, body').animate({ 
        scrollTop: offset
    }, 500);
});

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
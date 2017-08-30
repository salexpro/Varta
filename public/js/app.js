var s = skrollr.init({
    forceHeight: false,
    constants: {
        //fill the box for a "duration" of 150% of the viewport (pause for 150%)
        //adjust for shorter/longer pause
        box: '150p'
    }
});
$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        nav: false,
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: false
    })
});
// Создает обработчик события window.onLoad
YMaps.jQuery(function() {
    // Создает экземпляр карты и привязывает его к созданному контейнеру
    var map = new YMaps.Map(YMaps.jQuery(".map_container")[0]);
    // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
    map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 10);
})
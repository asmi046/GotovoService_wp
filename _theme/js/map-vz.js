ymaps.ready(init_vz);

function init_vz () {
    var myMap = new ymaps.Map("map_vz", {
        // Координаты центра карты
        center: [55.75283228476672,37.62071970898438],
        // Масштаб карты
        zoom: 9,
        // Выключаем все управление картой
        controls: []
    });

    var myGeoObjects = [];

    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark([55.75283228476672,37.62071970898438],{
                                        hintContent: '<div class="map-hint">Агрокомплекс «Мансурово»</div>',
                                        balloonContent: '<div class="map-hint"></div>',
                                    }
                                    ,{
                                        iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref: '/img/icons/map-pin-fill.svg',
                    // Размеры иконки
                    iconImageSize: [62, 60],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-31, -45]
                });

    var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });

    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

}
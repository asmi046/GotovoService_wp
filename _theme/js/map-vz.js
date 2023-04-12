ymaps.ready(init_vz);

function init_vz () {
    var myMap = new ymaps.Map("map_vz", {
        // Координаты центра карты
        center: [55.75283228476672,37.62071970898438],
        // Масштаб карты
        zoom: 9,
        // Выключаем все управление картой
        controls: ['zoomControl']
    });

    var myGeoObjects = [];

    if (all_pers != null)
    for (let i=0; i<all_pers.length; i++) {
        myGeoObjects.push(new ymaps.Placemark(all_pers[i].geo.split(',') ,{
            hintContent: '<div class="map-hint"><strong>Мастер:</strong> '+all_pers[i].name+' <br/> <strong>Адрес:</strong> '+all_pers[i].adress+' </div>',
            balloonContent: '<div class="map-hint"><strong>Мастер:</strong> '+all_pers[i].name+' <br/> <strong>Адрес:</strong> '+all_pers[i].adress+' </div>',
        })
        )

    }
        
        

    var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });

    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

}
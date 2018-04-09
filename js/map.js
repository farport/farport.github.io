function initMap() {
    console.log("Map Initialized...")
    var fploc = {lat: 41.878408, lng: 12.518710};
    var Options = {
        center: fploc,
        zoom: 15,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("contactMap"), Options);
    var marker = new google.maps.Marker({
        position: fploc,
        map: map
    });
}

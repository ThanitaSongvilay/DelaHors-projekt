var mapOptions = 
{
    center: new google.maps.LatLng(59.85882, 17.63889),
    zoom: 12,
    mapTypeId: google.maps.mapTypeId.ROADMAP
};

new google.maps.Map(document.getElementById('map'), mapOptions);
@extends('layout.maplayout')

@section('contents')
<section class="hero relative flex items-center justify-center min-h-screen" style="z-index: 10;">
<div id="map"></div>
</section>
@endsection

@section('scripts')
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>

<style>
    #map {
        height: 80vh;
    }
</style>
@endsection

@section('subscript')
<!-- <script>
    var map = L.map('map').setView([11.55, 104.91667], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var iconMarker1 = L.icon({
        iconUrl: 'https://i.pinimg.com/originals/05/5d/6f/055d6fc4b225d8fe1c124887c602b46a.png',
        iconSize:[50,40],
       
    })
    var iconMarker2 = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/128/11432/11432451.png',
        iconSize:[50,40],
       
    })
    var iconMarker3 = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/924/924924.png',
        iconSize:[50,40],
       
    })
    var iconMarker4 = L.icon({
        iconUrl: 'https://images.pond5.com/narcotic-drugs-warning-flat-icon-illustration-151718283_iconl.jpeg',
        iconSize:[50,40],
       
    })



    var marker = L.marker([11.55, 104.91667], {
        icon: iconMarker1
    }).addTo(map)
        .bindPopup('Robby')
        .openPopup();
    var marker = L.marker([11.541869196367768, 104.92411489523353]).addTo(map)
        .bindPopup('dangerous')
        .openPopup();
    var marker = L.marker([11.549335449181505, 104.87728555459614],{
        icon: iconMarker1
    }).addTo(map)
        .bindPopup('Thief')
        .openPopup();
    var marker = L.marker([11.570428651661869, 104.8985360328239],{
        icon: iconMarker3
    }).addTo(map)
        .bindPopup('Violence')
        .openPopup();
    var marker = L.marker([11.546224266599932, 104.87107505313674],{
        icon: iconMarker3
    }).addTo(map)
        .bindPopup('Murder')
        .openPopup();
    var marker = L.marker([11.566798127244313, 104.88722857059976],{
        icon: iconMarker2
    }).addTo(map)
        .bindPopup('Gun Attack')
        .openPopup();
    var marker = L.marker([11.554136479832856, 104.83700930228821],{
        icon: iconMarker2
    }).addTo(map)
        .bindPopup('Gun Attack')
        .openPopup();
    var marker = L.marker([11.585603038884988, 104.86310614742824],{
        icon: iconMarker1
    }).addTo(map)
        .bindPopup('Thief')
        .openPopup();
    var marker = L.marker([11.583932443914067, 104.81735022635048],{
        icon: iconMarker4
    }).addTo(map)
        .bindPopup('Drug Trafficking')
        .openPopup();
    var marker = L.marker([11.517326848587707, 104.907166347714],{
        icon: iconMarker3
    }).addTo(map)
        .bindPopup('Murder')
        .openPopup();
    var marker = L.marker([11.568862490732563, 104.8699497228396],{
        icon: iconMarker4
    }).addTo(map)
        .bindPopup('Drug Trafficking')
        .openPopup();
    var marker = L.marker([11.528996124648362, 104.88582881611936],{
        icon: iconMarker4
    }).addTo(map)
        .bindPopup('Drug Trafficking')
        .openPopup();
    var marker = L.marker([11.55047094014715, 104.89973535132303],{
        icon: iconMarker2
    }).addTo(map)
        .bindPopup('Gun Attack')
        .openPopup();
</script> -->
@endsection

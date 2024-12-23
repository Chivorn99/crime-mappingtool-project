document.addEventListener('DOMContentLoaded', (event) => {
    crimes.forEach(crime => {
        const map = L.map(`map${crime.id}`).setView([crime.latitude, crime.longitude], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let marker = L.marker([crime.latitude, crime.longitude]).addTo(map);

        map.on('click', function (e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;

            marker.setLatLng(e.latlng);

            document.getElementById(`latitude${crime.id}`).value = lat;
            document.getElementById(`longitude${crime.id}`).value = lng;

            console.log(`Updated coordinates for crime ${crime.id}: ${lat}, ${lng}`);
        });

        $(`#editCrimeModal${crime.id}`).on('shown.bs.modal', function () {
            setTimeout(function () {
                map.invalidateSize();
            }, 100);
        });
    });
});

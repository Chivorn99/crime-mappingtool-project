document.addEventListener('DOMContentLoaded', (event) => {
    var map = L.map('map').setView([11.5564, 104.9282], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    function getCrimeIcon(crimeType) {
        switch (crimeType) {
            case 'Assault':
                return '<text x="50%" y="50%" text-anchor="middle" dominant-baseline="central" font-size="10" fill="black">A</text>';
            case 'Burglary':
                return '<text x="50%" y="50%" text-anchor="middle" dominant-baseline="central" font-size="10" fill="black">B</text>';
            case 'Robbery':
                return '<text x="50%" y="50%" text-anchor="middle" dominant-baseline="central" font-size="10" fill="black">R</text>';
            default:
                return '<text x="50%" y="50%" text-anchor="middle" dominant-baseline="central" font-size="10" fill="black">C</text>';
        }
    }

    function createCustomMarker(crimeType) {
        var crimeIcon = getCrimeIcon(crimeType);
        return L.divIcon({
            className: 'custom-marker',
            html: `<svg width="30" height="40" viewBox="0 0 30 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 0C7.2 0 0 7.2 0 15c0 11.2 15 25 15 25s15-13.8 15-25C30 7.2 22.8 0 15 0z" fill="#2ecc71"/>
                    <circle cx="15" cy="15" r="6" fill="white"/>
                    ${crimeIcon}
                  </svg>`,
            iconSize: [30, 40],
            iconAnchor: [15, 40],
            popupAnchor: [0, -40]
        });
    }

    fetch('/api/crimes')
        .then(response => response.json())
        .then(data => {
            console.log('Fetched crime data:', data); // Log the data to check its format
            data.forEach(crime => {
                const lat = parseFloat(crime.latitude).toFixed(6); // Increase precision
                const lng = parseFloat(crime.longitude).toFixed(6); // Increase precision
                console.log(`Plotting crime at lat: ${lat}, lng: ${lng}`);
                var marker = L.marker([lat, lng], { icon: createCustomMarker(crime.crime_type) }).addTo(map);
                marker.bindPopup(`<b>${crime.crime_type}</b><br>${crime.description}`);
            });
        })
        .catch(error => {
            console.error('Error fetching crime data:', error);
        });
});

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        #map {
            height: 400px;
            position: relative;
        }

        #locateButton {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <button onclick="locateUser()">Lokasi Saya</button>

    <!-- Input untuk menyimpan data latitude dan longitude -->
    <input type="text" id="latitude" placeholder="Latitude" readonly>
    <input type="text" id="longitude" placeholder="Longitude" readonly>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.98403, 110.40956], 14);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var marker;

        map.on('click', function(e) {
            if (marker) {
                map.removeLayer(marker);
            }
            
            marker = L.marker(e.latlng).addTo(map);
            marker.bindPopup("Koordinat: " + e.latlng.toString()).openPopup();

            // Update nilai input dengan data latitude dan longitude
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        });

        function locateUser() {
            map.locate({setView: true, maxZoom: 16});

            function onLocationFound(e) {
                var radius = e.accuracy / 2;

                // Hapus marker sebelum menambahkan yang baru
                if (marker) {
                    map.removeLayer(marker);
                }

                marker = L.marker(e.latlng).addTo(map)
                    .bindPopup("Lokasi Saya").openPopup();

                L.circle(e.latlng, radius).addTo(map);
            }

            function onLocationError(e) {
                alert(e.message);
            }

            map.on('locationfound', onLocationFound);
            map.on('locationerror', onLocationError);
        }
    </script>
</body>
</html>

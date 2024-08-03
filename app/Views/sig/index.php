<?php echo view('layout/v_header'); ?>
<div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="text-secondary fw-bold text-uppercase">Peta</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card rounded shadow-lg">
                    <div id="map" class="rounded" style="height: 495px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet Library -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-3.7897420303213507, 114.77563994480109], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var atmIcon = L.icon({
        iconUrl: '/images/atm_icon.png',
        iconSize: [32, 32],
        iconAnchor: [16, 32],
        popupAnchor: [0, -32]
    });

    var bankIcon = L.icon({
        iconUrl: '/images/bank_icon.png',
        iconSize: [32, 32],
        iconAnchor: [16, 32],
        popupAnchor: [0, -32]
    });

    var markerData = <?= json_encode($marker) ?>;
    markerData.forEach(function(atm) {
        var icon = atm.type === 'ATM' ? atmIcon : bankIcon;
        var marker = L.marker([atm.latitude, atm.longitude], {
                icon: icon
            }).addTo(map)
            .bindPopup('<b>' + atm.name + '</b><br />' + atm.address);

        marker.on('click', function() {
            var userLocation = map.getCenter();
            var routeControl = L.Routing.control({
                waypoints: [
                    L.latLng(userLocation.lat, userLocation.lng),
                    L.latLng(atm.latitude, atm.longitude)
                ],
                createMarker: function() {
                    return null;
                }
            }).addTo(map);

            map.fitBounds([
                [userLocation.lat, userLocation.lng],
                [atm.latitude, atm.longitude]
            ]);
        });
    });

    var geojsonData = {
        "type": "FeatureCollection",
        "features": [
            <?php foreach ($polygon as $index => $value) : ?> {
                    "type": "Feature",
                    "properties": {},
                    "geometry": {
                        "type": "Polygon",
                        "coordinates": [
                            <?= $value['polygon']; ?>
                        ]
                    }
                }
                <?= $index < count($polygon) - 1 ? ',' : '' ?>
            <?php endforeach; ?>
        ]
    };


    L.geoJSON(geojsonData, {
        style: function(feature) {
            return {
                color: 'silver',
                fillColor: 'blue',
                fillOpacity: 0.5
            };
        }
    }).addTo(map);
</script>
<?php echo view('layout/v_footer'); ?>
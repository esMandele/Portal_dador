


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---..Links do leaflet para fazer o mapa..--->
    <link rel="stylesheet" href="leaflet/leaflet.css">
   <script src="leaflet/leaflet.js"></script>
    <title>Localização</title>

    <style>
        #map{
            height: 100vh;
        }
    </style>
</head>
<body>

    <h2>sua localização</h2>
    <h3></h3>
    <div id="map"></div>
    <script>
        let h3 = document.querySelector('h3');
        var map;

        function success(pos){
            console.log(pos.coords.latitude, pos.coords.longitude);
            h3.textContent = `Latitude:${pos.coords.latitude}, Longitude:${pos.coords.longitude}`;

            if(map === undefined){
                map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 15);
            }else{
                map.remove();
                map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 15);
            }
            
            //Renderizar mapa
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(map)
            .bindPopup('Minha localização.')
            .openPopup();

            //Click para ver latitude
            function onMapClick(e) {
                popup
                .setLatLng(e.latlng)
                .setContent("Clicou no mapa " + e.latlng.toString())
                .openOn(map);
            }

            map.on('click', onMapClick);
        }

        function error(err){
        console.log(err);
        }
        var watchID = navigator.geolocation.watchPosition(success, error);

       /*             
        const url = 'coords.php'; // api responsavel por buscar os dados que estao salvos no banco.

        fetch(url)
        .then(response => response.json())
        .then(result => {
            const dados = JSON.stringify(result);

            result.forEach(function(retorno) {
                var location = new L.LatLng(retorno.latitude, retorno.longitude);
                console.log("RETORNO ",result);
                var markerGroup = L.featureGroup([]).addTo(map);
                var latLng = L.latLng([retorno.latitude, retorno.longitude]);
                L.marker(latLng).bindPopup('Nome: ' + retorno.nome +
                '<br>Endreço: ' + retorno.endereco +
                '<br>Contacto: ' + retorno.contacto).addTo(markerGroup).addTo(map);
                });

            })

           

        }
        function error(err){
            console.log(err);
        }

        var watchID = navigator.geolocation.watchPosition(success, error);
*/
        
    </script>
</body>
</html>
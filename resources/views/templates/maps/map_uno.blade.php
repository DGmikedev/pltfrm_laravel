<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAPS</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <link rel="stylesheet" href="bootstrap_css/darck_mode\bootstrap.min.css" >
    <script src={{ asset('bootstrap_js/bootstrap.min.js') }}   ></script> 

</head>
<style>
    #map { 
        height: 500px; 
        width: 100%; 
    }
</style>
<body>

    <table class="table table-hover">
        <thead>
          <tr>
            <th>
                <h3 class="text-success" >MAPA CENCILLO</h3>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            
            <td>
                <div id="map" ></div>
            </td>
            
            </tr>
        </tbody>
    </table>
    
    <script>
    // initialize the map on the "map" div with a given center and zoom
    var map = L.map('map', {
        center: [19.4326018,-99.1332049],
        zoom  : 15
    });

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: 'mike@2025'
    }).addTo(map);
    </script>
</body>
</html>
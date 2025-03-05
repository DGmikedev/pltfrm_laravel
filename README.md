## PLATAFORMA LARAVEL DE PHP

# MAPA CENCILLO
* url: .../pltfrm_laravel/public/map/map
```html
<!-- Invoca las librerías de leaflet -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Bootstrap Darck -->
    <link rel="stylesheet" href="bootstrap_css/darck_mode\bootstrap.min.css" >
    <script src={{ asset('bootstrap_js/bootstrap.min.js') }}   ></script> 

    <!---- Ebncabezados ------->
    <table class="table table-hover">
        <thead> <tr> <th> <h3 class="text-success" >MAPA CENCILLO</h3> </th> </tr> </thead>
        <tbody> <tr class="table-active"> <td> <div id="map" ></div> </td> </tr> </tbody>
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

```

## INICIO DE PLATAFORMA

```BASH
   _                               _ 
  | |                             | |
  | |     __ _ _ __ __ ___   _____| |
  | |    / _` | '__/ _` \ \ / / _ \ |
  | |___| (_| | | | (_| |\ V /  __/ |
  |______\__,_|_|  \__,_| \_/ \___|_|


 Would you like to install a starter kit? [No star
ter kit]:
  [none     ] No starter kit
  [breeze   ] Laravel Breeze
  [jetstream] Laravel Jetstream
 > none


 Which testing framework do you prefer? [Pest]:
  [0] Pest
  [1] PHPUnit
 > 1


 Would you like to initialize a Git repository? (y
es/no) [no]:
 > no

 Which database will your application use? [SQLite]:
  [sqlite ] SQLite
  [mysql  ] MySQL
  [mariadb] MariaDB
  [pgsql  ] PostgreSQL
  [sqlsrv ] SQL Server (Missing PDO extension)      
 > mysql

 ```
Bootstrap: https://bootswatch.com/cyborg/
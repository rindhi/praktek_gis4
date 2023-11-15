<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktek 1</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .fullscreen {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
        }
        
    </style>
</head>
<body>
    <div class="blok-info" id="blokhasil"></div>
    <div id="petaku" class="fullscreen"></div>
    <script>
        //mengatur generate map
        var hasilpeta = L.map('petaku').setView([-7.556951261217117, 112.23338842391969], 18);
        //mengatur datanya
        L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}',{maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3']}).addTo(hasilpeta);
        var alun = L.marker([-7.556951261217117, 112.23338842391969], {draggable: true}).addTo(hasilpeta);
        var unwaha = L.marker([-7.520267989872001, 112.23230114203787]).addTo(hasilpeta);

        let data = [
            [-7.556773114006844, 112.23341524600984],
            [-7.5566082612990275, 112.23404824733736],
            [-7.556012663894883, 112.23399460315706],
            [-7.5559222606456755, 112.23526060581209],
            [-7.554108873827461, 112.23543226718904],
            [-7.554015811248751, 112.23496019840242]
        ];
        let data2 = [
            [-7.556767796178536, 112.23341256380083],
            [-7.556842245768808, 112.23271787166597],
            [-7.555149843877342, 112.23253145813943],
            [-7.555095335929303, 112.23306119441988],
            [-7.554156734574418, 112.233265042305],
            [-7.554308293571469, 112.23423331975938],
            [-7.553858934284988, 112.23427087068559],
            [-7.554005175524201, 112.23496824502946]
        ];

        let rute1 = new L.Polyline(data, {
            color: 'red',
            weight: 5,
            opacity: 1,
            smoothFactor: 1
        }).addTo(hasilpeta);

        let rute2 = new L.Polyline(data2, {
            color: 'yellow',
            weight: 5,
            opacity: 1,
            smoothFactor: 1
        }).addTo(hasilpeta);

        // L.Routing.control({
        //     waypoints: [
        //         L.latLng(-7.520267989872001, 112.23230114203787),
        //         L.latLng(-7.556951261217117, 112.23338842391969)          
        //     ],
        //     routeWhileDragging: true
        // }).addTo(hasilpeta);
       
    </script>
</body>
</html>


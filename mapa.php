<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <style>
            #map {
                width: 100%;
                height: 400px;
                
            }
            
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta charset="UTF-8">
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="SEU_ID_DO_CLIENTE">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <title>Pit Stop do Aluno</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/agency.min.css" rel="stylesheet">


    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Central do Aluno</a>
                <a href="index.php#services"> 
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Página Inicial<i class="fa fa-2x"></i>
                    </button>
                </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php#services">Página Inicial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br><br><br>
    <center>
        <h2> Pit Stop do Aluno </h2>
    </center>          
        <div id="map">
        <script>
            function initMap() {
                // Map options
                var options = {
                    zoom: 17,
                    center: {lat: -22.964562, lng: -42.026744}
                }

                // New map
                var map = new google.maps.Map(document.getElementById('map'), options);

                // Listen for click on map
                google.maps.event.addListener(map, 'click', function (event) {
                    // Add marker
                    addMarker({coords: event.latLng});
                });

                /*
                 // Add marker
                 var marker = new google.maps.Marker({
                 position:{lat:42.4668,lng:-70.9495},
                 map:map,
                 icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
                 });
                 
                 var infoWindow = new google.maps.InfoWindow({
                 content:'<h1>Lynn MA</h1>'
                 });
                 
                 marker.addListener('click', function(){
                 infoWindow.open(map, marker);
                 });
                 */

                // Array of markers
                var markers = [
                    {
                        coords: {lat: -22.964562, lng: -42.026744},
                        iconImage: '',
                        content: '<h3>IFRJ - Arraial do cabo</h3>'
                    },
                    {
                        coords: {lat: -22.966577, lng: -42.027311},
                        content: '<h3>Fim do mundo - Papelaria</h3>'
                    },
                    {
                        coords: {lat: -22.966870, lng: -42.027952},
                        content: '<h3>Dom sebastian - Restaurante </h3>'
                    },
                    {
                        coords: {lat: -22.964556, lng: -42.026311},
                        content: '<h3>Delicia Restaurante Delivery - Restaurante</h3>'
                    },
                    {
                        coords: {lat: -22.964391, lng: -42.026284},
                        content: '<h3>Amarelinho lanches- Lanchonete</h3>'
                    },
                    {
                        coords: {lat: 42.7762, lng: -71.0773}
                    }
                ];

                // Loop through markers
                for (var i = 0; i < markers.length; i++) {
                    // Add marker
                    addMarker(markers[i]);
                }

                // Add Marker Function
                function addMarker(props) {
                    var marker = new google.maps.Marker({
                        position: props.coords,
                        map: map,
                        //icon:props.iconImage
                    });

                    // Check for customicon
                    if (props.iconImage) {
                        // Set icon image
                        marker.setIcon(props.iconImage);
                    }

                    // Check content
                    if (props.content) {
                        var infoWindow = new google.maps.InfoWindow({
                            content: props.content
                        });

                        marker.addListener('click', function () {
                            infoWindow.open(map, marker);
                        });
                    }
                }
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe9XMrWup4aU7acgAL92vrhC8XikyJHu0&callback=initMap">
        </script>
        </div>

        <hr style="height:0px; border:none; color:#212429; background-color:#212429; margin-top: 0px; margin-bottom: 0px;"/>
        
        <br><br><br><br>
        <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Central do Aluno 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/centraldoaluno.ifrjcac/?modal=admin_todo_tour">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UC5IeF9M9cuN4O2H33bwYBOA">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="politica.html">Política de Privacidade</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li>
                            Contato: centraldoaluno.ifrjcac@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    </body>
    
    </html>
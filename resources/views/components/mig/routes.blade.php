<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>

<!-- google maps javascript -->
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&sensor=true"></script>
<div>
    <style>
        #map {
            width: 100%;
            height: 100%;
        }

        .scroll {
            height: 100%;
        }
    </style>
    <ion-header-bar class="bar-dark" >
        <h1 class="title">Map</h1>
    </ion-header-bar>
    <ion-content>
        <div id="map" data-tap-disabled="true"></div>
    </ion-content>
    <ion-footer-bar class="bar-dark">
        <a ng-click="centerOnMe()" class="button button-icon icon ion-navigate">Find Me</a>
    </ion-footer-bar>
    <script>
        angular.module('ionic.example', ['ionic'])

            .controller('MapCtrl', function($scope, $ionicLoading, $compile) {
                function initialize() {
                    var myLatlng = new google.maps.LatLng(28.632681,77.208162);

                    var mapOptions = {
                        center: myLatlng,
                        zoom: 16,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("map"),
                        mapOptions);

                    //Marker + infowindow + angularjs compiled ng-click
                    var contentString = "<div><a ng-click='clickTest()'>Click me!</a></div>";
                    var compiled = $compile(contentString)($scope);

                    var infowindow = new google.maps.InfoWindow({
                        content: compiled[0]
                    });

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: 'Uluru (Ayers Rock)'
                    });

                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map,marker);
                    });

                    $scope.map = map;
                }
                google.maps.event.addDomListener(window, 'load', initialize);

                $scope.centerOnMe = function() {
                    if(!$scope.map) {
                        return;
                    }

                    $scope.loading = $ionicLoading.show({
                        content: 'Getting current location...',
                        showBackdrop: false
                    });

                    navigator.geolocation.getCurrentPosition(function(pos) {
                        $scope.map.setCenter(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
                        $scope.loading.hide();
                    }, function(error) {
                        alert('Unable to get location: ' + error.message);
                    });
                };

                $scope.clickTest = function() {
                    alert('Example of infowindow with ng-click')
                };

            });
    </script>
</div>

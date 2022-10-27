<html>
<head>
    
    <?php
    include "header.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript">
        var locations = [
            ['Frozen Foods', 36.879869652865096,-1.2323378188187182, 'KFC Garden City Mall, Nairobi'],
            ['Frozen Foods', -1.2198105974321343, 36.88888689670477, 'Pizza Inn Thika Road Mall, Thika Road, Nairobi'],
            ['Frozen Foods', -1.2638550958970436, 36.8031704390339, 'Chicken Inn-Westlands, Ring Road Parklands, Nairobi'],
            ['Frozen Foods', -1.2830614637533586, 36.82171057156634, 'Java House - Kimathi Street, Kimathi Street, Nairobi'],
            ['Frozen Foods', -1.291573041885826, 36.78605910835011, 'Creamy Inn - Kilimani, Wood Avenue, Nairobi'],
            ['Frozen Foods', -1.3000817558001938, 36.801516283211456, 'Choma Boma, Ngong Road, Nairobi'],
            ['Frozen Foods', -1.2787444449833698, 36.77071476786946, 'Burger King Lavington, James Gichuru Road, Nairobi'],
            ['Frozen Foods', -1.299244881817178, 36.8907321390339, 'Fish Place, Bansora Court, Nairobi']
        ];
        function initialize() {
            var myOptions = {
                center: {lat: 42.986950, lng: -81.243177},
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("default"),myOptions);
            setMarkers(map,locations)
        }
        function setMarkers(map,locations){
            var marker, i
            for (i = 0; i < locations.length; i++)
            {
                var loan = locations[i][0]
                var lat = locations[i][1]
                var long = locations[i][2]
                var add =  locations[i][3]

                latlngset = new google.maps.LatLng(lat, long);

                var marker = new google.maps.Marker({
                    map: map, title: loan , position: latlngset
                });
                map.setCenter(marker.getPosition())
                var content = "<h3>" + loan +  '</h3>'+add
                var infowindow = new google.maps.InfoWindow()

                google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map,marker);
                    };
                })(marker,content,infowindow));
            }
        }
    </script>
    <style>
        #heading{
            font-size: 50px;
            font-family: "Goudy Old Style";

        }
        .text{
            font-size: 20px;

        }
    </style>
</head>
<body onload="initialize()">
<div class="form-group col-md-4">
    <div class="well">
        <p id="heading">Visit our locations</p>
        <div ng-app="myApp" ng-controller="namesCtrl">
            <input type="text" class="form-control" ng-model="test" placeholder="Enter your address here">
            <br><br>
            <ol>
                <li class="text" ng-repeat="x in names | filter:test">
                    {{x}}
                </li>
                <p class="text" ng-show="(names | filter:test).length == 0">Sorry, we are not present at your location</p>
            </ol>
        </div>
        <!-- Script for angular JS -->
        <script>
            angular.module('myApp', []).controller('namesCtrl', function($scope) {
                $scope.names = [
                    'KFC Garden City Mall, Nairobi, ON',
                    'Pizza Inn Thika Road Mall, Thika Road, Nairobi, ON',
                    'Chicken Inn-Westlands, Ring Road Parklands, Nairobi, ON',
                    'Java House - Kimathi Street, Kimathi Street, Nairobi, ON',
                    'Creamy Inn - Kilimani, Wood Avenue, Nairobi, ON',
                    'Choma Boma, Ngong Road, Nairobi,ON',
                    'Burger King Lavington, James Gichuru Road, Nairobi, ON',
                    'Fish Place, Bansora Court, Nairobi, ON',

                ];
            });
        </script>
    </div>
</div>
<div class="form-group col-md-8">
    <div id="default" style="width:100%; height:550px"></div>
</div>
</body>
</html>


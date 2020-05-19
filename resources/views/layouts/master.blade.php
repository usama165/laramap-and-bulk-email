<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>laramap</title>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    @yield('content')



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <!-- google map api    -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCZo-fzRVg-0ukNWXhrcGrqvLHEEIeb4s&callback=initMap&libraries=places"
        type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script>
    var map;

    function initMap() {
        // var myloc = {
        //     lat: 24.8607,
        //     lng: 67.0011
        // };
        var myloc = new google.maps.LatLng(24.8607, 67.0011);
        map = new google.maps.Map(document.getElementById('map'), {
            center: myloc,
            zoom: 10
        });

        function createMarker(LatLng, icn) {

            var marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                icon: icn,
                title: 'Hello World!'
            });


        }
        var request = {
            location: myloc,
            radius: '2500',
            type: ['school']
        };
        service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request, callback);

        function callback(results, status) {
            console.log(results);
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    var place = results[i];
                    LatLng = place.geometry.location;
                    icn = place.marker;
                    createMarker(LatLng, icn);
                }
            }
        }
    }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 180px;
        width: 350px;;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 47.474889, lng:  -0.547111};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjWm01pR4lnDyonlwS0vmS-aYHfPfQPq8&callback=initMap">
    </script>
  </body>
</html>

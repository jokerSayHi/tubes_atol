'use strict';

/* global jQuery */
/* global google */

jQuery(document).ready(function($) {
  $('.button-collapse').sideNav({
    menuWidth: 315,
    closeOnClick: false
  });

  $('.modal-trigger').leanModal();

  // GOOGLE MAP API
  function initialize() {
    var myLatlng = new google.maps.LatLng(-6.883403, 107.53889000000004);
    var mapOptions = {
      zoom: 16,
      center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var data;
    $.get('/api/usaha', function(datum) {
      data = datum.result;
      window.data = data;
    }).done(function () {
      console.log(data);

      for (var i = 0; i < data.length; i++) {
        var latLang = new google.maps.LatLng(Number(data[i].latitude), Number(data[i].longitude));
        console.log(latLang);
        var marker = new google.maps.Marker({
          position: latLang,
          map: map,
          title: 'Hello World!'
        });
        console.log(marker)
      }
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

});

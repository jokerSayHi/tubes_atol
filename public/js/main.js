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

        var content = '<div><h5>'+ data[i].nama_usaha +'</h5><h6>'+ data[i].nama +' | '+ data[i].email +'</h6><p> Alamat : '+ data[i].alamat_usaha +' </p> <p> Produk :'+ data[i].produk_utama +' </p><p>Telepon : '+ data[i].telp_usaha +'</p><p> '+data[i].deskripsi+' </p></div>';

        var infowindow = new google.maps.InfoWindow();

        // INIT MARKER
        var marker = new google.maps.Marker({
          position: latLang,
          map: map,
          title: data[i].nama_usaha
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(content);
                infowindow.open(map, marker);
            }
        })(marker, i));

        // google.maps.event.addListener(marker, 'click', function() {
        //   infowindow.open(map,marker);
        // });

      }
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

});

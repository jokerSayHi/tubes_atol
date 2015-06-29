<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>
  <div class="row">

    {{-- SIDEBAR --}}
    <div class="col s3">
      <div id="slide-out" class="side-nav fixed">
        <div class="center-align">
          <!-- HEADER -->
          <div class="green darken-2" style="30px">&nbsp;</div>
          <div class="title-container green darken-1 white-text">
            <div class="content">
              <p class="img">
                <img src="http://placehold.it/50x50/d32f2f/ffffff?text=AS" style="border-radius:50%">
              </p>
              <p class="name">
                Alfons Santoso
              </p>
            </div>
          </div>
          <!-- FORM -->
          <div class="row">
            @include('includes.navbaruser')
          </div>
        </div>
      </div>
      <!-- FAB -->
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>


    <!-- CONTENT -->
    <div class="col s9">
      <div class="row">
        <div class="col s12 card card-table">
          <span class="card-title grey-text lighten-1" style="padding-left:0">Tambah Usaha</span>

          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input id="nama_usaha" name="nama_usaha" required type="text" class="validate">
                <label for="nama_usaha">Nama Usaha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="produk_utama" name="produk_utama" required type="text" class="validate">
                <label for="produk_utama">Produk Utama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat_usaha" name="alamat_usaha" required type="text" class="validate">
                <label for="alamat_usaha">Alamat Usaha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="deskripsi" name="deskripsi" required type="text" class="validate">
                <label for="deskripsi">Deskripsi</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="telp_usaha" type="text" nama="telp_usaha" class="validate">
                <label for="telp_usaha">Telepon Usaha</label>
              </div>
            </div>

            <div class="row">
              <p>Skala Usaha</p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala1"  />
                <label for="skala1">Mikro</label>
              </p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala2"  />
                <label for="skala2">Kecil</label>
              </p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala3"  />
                <label for="skala3">Menengah</label>
              </p>
            </div>

            {{-- DISINI TAMBAHIN GET MAP LAT LANG --}}
            <div class="row">
              <div class="col s12">
                <div id="map-add" style="height: 300px;"></div>

                <div class="input-field col s6">
                  <input placeholder="Latitude" id="lat" name="lat" type="text" class="validate">
                  <label for="lat">Latitude</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="Longitude" id="long" name="long" type="text" class="validate">
                  <label for="long">Longitude</label>
                </div>
              </div>
            </div>
            {{-- END GET LAT LANG --}}

            {{-- 1 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 1</span>
                  <input type="file" />
                </div>
              </div>
            </div>
            {{-- 2 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 2</span>
                  <input type="file" />
                </div>
              </div>
            </div>
            {{-- 3 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 3</span>
                  <input type="file" />
                </div>
              </div>
            </div>
            {{-- 4 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 4</span>
                  <input type="file" />
                </div>
              </div>
            </div>
            {{-- 5 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 5</span>
                  <input type="file" />
                </div>
              </div>
            </div>

            {{-- KELURAHAN --}}

            <div class="row">
              <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Pilih Kelurahan</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Kelurahan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Pilih Sektor</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Sektor</label>
              </div>
            </div>


            <div class="row center-align">
              <div class="col s6">
                <button class="btn blue lighten-1 btn-block">Update</button>
              </div>
              <div class="col s6">
                <button class="btn red lighten-1 btn-block" type="reset">Reset</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="tooltipped btn-floating  btn-large waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Edit Profile">
      <i class="mdi-content-create"></i>
    </a>
    <ul style="margin-bottom:-10px">
      <li class="tooltipped " data-position="left" data-delay="50" data-tooltip="Change Password"><a class="btn-floating waves-effect waves-light red"><i class="mdi-action-lock-outline"></i></a></li>
    </ul>
  </div>

  @include('includes.scripts')
  <script>
  $(document).ready(function() {
    $('select').material_select();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    var latlng = new google.maps.LatLng(-6.886919, 107.613288);
    var map = new google.maps.Map(document.getElementById('map-add'), {
        center: latlng,
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Set lat/lon values for this property',
        draggable: true
    });
    google.maps.event.addListener(marker, 'dragend', function(a) {

      var lat = document.getElementById('lat');
      var lon = document.getElementById('long');

      lat.value = a.latLng.A;
      lon.value = a.latLng.F;

    });
  });
  </script>

</body>
</html>

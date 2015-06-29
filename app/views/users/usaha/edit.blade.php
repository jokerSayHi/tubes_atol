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
              <?php
                $nama = explode(" ", Auth::user()->nama);
                $n = [];
                foreach ($nama as $value) {
                  $init = $value;
                  $n[] = $init[0];
                }
                $final = implode("", $n);
              ?>
              <p class="img">
                <img src="http://placehold.it/50x50/d32f2f/ffffff?text=<?php echo $final; ?>" style="border-radius:50%">
              </p>
              <p class="name">
                {{ Auth::user()->nama }}
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
          <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Usaha : <?php echo $usaha->nama_usaha; ?></span>

          <form class="col s12" method="post" action="/usaha/<?php echo $usaha->id_usaha; ?>">
            <input name="_method" type="hidden" value="PUT">
            <div class="row">
              <div class="input-field col s12">
                <input id="nama_usaha" name="nama_usaha" required type="text" class="validate" value="<?php echo $usaha->nama_usaha; ?>">
                <label for="nama_usaha">Nama Usaha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="produk_utama" name="produk_utama" required type="text" class="validate" value="<?php echo $usaha->produk_utama; ?>">
                <label for="produk_utama">Produk Utama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat_usaha" name="alamat_usaha" required type="text" class="validate" value="<?php echo $usaha->alamat_usaha; ?>">
                <label for="alamat_usaha">Alamat Usaha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="deskripsi" name="deskripsi" required type="text" class="validate" value="<?php echo $usaha->deskripsi; ?>">
                <label for="deskripsi">Deskripsi</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="telp_usaha" type="text" nama="telp_usaha" class="validate" value="<?php echo $usaha->telp_usaha; ?>">
                <label for="telp_usaha">Telepon Usaha</label>
              </div>
            </div>

            <div class="row">
              <p>Skala Usaha</p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala1" value="Mikro" <?php if($usaha->skala_usaha == 'Mikro') echo "checked"; ?> />
                <label for="skala1">Mikro</label>
              </p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala2" value="Kecil" <?php if($usaha->skala_usaha == 'Kecil') echo "checked"; ?> />
                <label for="skala2">Kecil</label>
              </p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala3" value="Menengah" <?php if($usaha->skala_usaha == 'Menengah') echo "checked"; ?> />
                <label for="skala3">Menengah</label>
              </p>
            </div>

            {{-- DISINI TAMBAHIN GET MAP LAT LANG --}}
            <div class="row">
              <div class="col s12">
                <div id="map-add" style="height: 300px;"></div>

                <div class="input-field col s6">
                  <input placeholder="Latitude" id="lat" name="lat" type="text" class="validate" value="<?php echo $usaha->latitude; ?>">
                  <label for="lat">Latitude</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="Longitude" id="long" name="long" type="text" class="validate" value="<?php echo $usaha->longitude; ?>">
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
                  <input type="file" name="gambar_satu" />
                </div>
              </div>
            </div>
            {{-- 2 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 2</span>
                  <input type="file" name="gambar_satu" />
                </div>
              </div>
            </div>
            {{-- 3 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 3</span>
                  <input type="file" name="gambar_satu" />
                </div>
              </div>
            </div>
            {{-- 4 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 4</span>
                  <input type="file" name="gambar_satu" />
                </div>
              </div>
            </div>
            {{-- 5 --}}
            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Gambar 5</span>
                  <input type="file" name="gambar_satu" />
                </div>
              </div>
            </div>

            {{-- KELURAHAN --}}

            <div class="row">
              <div class="input-field col s12">
                <select name="id_kelurahan">
                  <option value="" disabled selected>Pilih Kelurahan</option>
                  <?php
                  $kel = Kelurahan::all();
                  foreach ($kel as $key => $value) {
                    echo "<option value=\"" . $value->id_kelurahan . "\">" . $value->nama_kelurahan . "</option>";
                  }
                  ?>
                </select>
                <label>Kelurahan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="id_sektor">
                  <option value="" disabled selected>Pilih Sektor</option>
                  <?php
                  $sektor = Sektor::all();
                  foreach ($sektor as $key => $value) {
                    echo "<option value=\"" . $value->id_sektor . "\">" . $value->nama_sektor . "</option>";
                  }
                  ?>
                </select>
                <label>Sektor</label>
              </div>
            </div>


            <div class="row center-align">
              <div class="col s6">
                <button class="btn blue lighten-1 btn-block" type="submit">Update</button>
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

<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>

  @include('includes.navbar')
  <div id="slide-out" class="side-nav fixed">
    @include('includes.menuadmin')
  </div>

  {{-- CONTENT GOES HERE --}}
  <div class="container">
    <div class="row">
      <div class="card-panel card-table col offset-s2 s11">
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Kelurahan <?php echo $kel->nama_kelurahan; ?></span>
        <div class="row">
          <form class="col s12" method="post" action="/dashboard/kelurahan/<?php echo $kel->id_kelurahan; ?>">
            <input name="_method" type="hidden" value="PUT">
            <div class="row">
              <div class="input-field col s12">
                <input id="id" name="id_kelurahan" disabled type="text" class="validate" value="<?php echo $kel->id_kelurahan; ?>">
                <label for="id">ID Kelurahan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="kelurahan" name="kelurahan" required type="text" class="validate" value="<?php echo $kel->nama_kelurahan; ?>">
                <label for="kelurahan">Nama Kelurahan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="id_kecamatan">
                  <option value="">Pilih Kecamatan</option>
                  <?php
                  foreach ($kec as $key => $value) {
                    if ($kel->id_kecamatan == $value->id_kecamatan) {
                      echo "<option value=\"" . $value->id_kecamatan . "\" selected>" . $value->nama_kecamatan . "</option>";
                    } else {
                      echo "<option value=\"" . $value->id_kecamatan . "\">" . $value->nama_kecamatan . "</option>";
                    }
                  }
                  ?>
                </select>
                <label>Nama kecamatan</label>
              </div>
            </div>

            <div class="row center-align">
              <div class="col s6">
                <button class="btn blue lighten-1 btn-block">Submit</button>
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
</body>
</html>
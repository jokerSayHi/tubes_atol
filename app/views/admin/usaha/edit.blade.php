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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Usaha: <?php echo $usaha->nama_usaha; ?></span>
        <div class="row">
          <form class="col s12">
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

                <input id="tlp_usaha" type="text" nama="tlp_usaha" class="validate" value="<?php echo $usaha->telp_usaha; ?>">
                <label for="tlp_usaha">Telepon Usaha</label>
              </div>
            </div>
            <div class="row">
              <p>Skala Usaha</p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala1" <?php if($usaha->skala_usaha == 'Mikro') echo "checked"; ?> />
                <label for="skala1">Mikro</label>
              </p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala2" <?php if($usaha->skala_usaha == 'Kecil') echo "checked"; ?> />
                <label for="skala2">Kecil</label>
              </p>
              <p>
                <input class="with-gap" name="skala" type="radio" id="skala3" <?php if($usaha->skala_usaha == 'Menengah') echo "checked"; ?> />
                <label for="skala3">Menengah</label>
              </p>
            </div>
            <div class="row">
              <p>Status Aktif</p>
              <p>
                <input class="with-gap" name="status" type="radio" id="status1" <?php if($usaha->status_aktif == 'Y') echo "checked"; ?> />
                <label for="status1">Aktif</label>
              </p>
              <p>
                <input class="with-gap" name="status" type="radio" id="status2" <?php if($usaha->status_aktif == 'T') echo "checked"; ?> />
                <label for="status2">Tidak Aktif</label>
              </p>
            </div>
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

  <script>
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</body>
</html>
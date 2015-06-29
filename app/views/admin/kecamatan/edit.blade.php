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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Kecamatan <?php echo $kec->nama_kecamatan; ?></span>
        <div class="row">
          <form class="col s12" method="post" action="/dashboard/kecamatan/<?php echo $kec->id_kecamatan; ?>">
            <input name="_method" type="hidden" value="PUT">
            <div class="row">
              <div class="input-field col s12">
                <input id="id" name="id_kecamatan" required type="text" class="validate" value="<?php echo $kec->id_kecamatan; ?>" disabled>
                <label for="id">ID Kecamatan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="kecamatan" name="kecamatan" required type="text" class="validate" value="<?php echo $kec->nama_kecamatan; ?>">
                <label for="kecamatan">Nama Kecamatan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="kode_pos" name="kode_pos" required type="text" class="validate" value="<?php echo $kec->kode_pos; ?>">
                <label for="kode_pos">Kode Pos</label>
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
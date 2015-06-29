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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit User <?php echo $user->nama; ?></span>
        <div class="row">
          <form class="col s12" method="post" action="/dashboard/user/<?php echo $user->nik; ?>">
            <input name="_method" type="hidden" value="PUT">
            <div class="row">
              <div class="input-field col s12">
                <input id="nama" name="nama" required type="text" class="validate" value="<?php echo $user->nama; ?>">
                <label for="nama">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" required type="email" class="validate" value="<?php echo $user->email; ?>" readonly>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat" name="alamat" required type="text" class="validate" value="<?php echo $user->alamat; ?>">
                <label for="alamat">Alamat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="tempat_lahir" name="tempat_lahir" required type="text" class="validate" value="<?php echo $user->tempat_lahir; ?>" readonly>
                <label for="tempat_lahir">Tempat Lahir</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="tgl_lahir" type="text" name="tgl_lahir" class="validate" value="<?php echo $user->tgl_lahir; ?>" readonly>
                <label for="tgl_lahir">Tanggal Lahir</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="telp" name="telp" required type="number" class="validate" value="<?php echo $user->no_telp; ?>">
                <label for="telp">Nomor Telepon</label>
              </div>
            </div>
            <div class="row">
              <p>Status Aktif</p>
              <p>
                <input class="with-gap" name="status" type="radio" id="status1" value="Y" <?php if($user->status_aktif == 'Y') echo "checked"; ?>/>
                <label for="status1">Aktif</label>
              </p>
              <p>
                <input class="with-gap" name="status" type="radio" id="status2" value="T" <?php if($user->status_aktif == 'T') echo "checked"; ?>/>
                <label for="status2">Tidak Aktif</label>
              </p>
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
   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>
</body>
</html>
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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit User NIK: [123]</span>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input id="nama" name="nama" required type="text" class="validate">
                <label for="nama">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" required type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat" name="alamat" required type="text" class="validate">
                <label for="alamat">Alamat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="tmptlahir" name="tmptlahir" required type="text" class="validate">
                <label for="tmptlahir">Tempat Lahir</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="tgl_lahir" type="date" class="datepicker">
                <label for="tgl_lahir">Tanggal Lahir</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="telp" name="telp" required type="text" class="validate">
                <label for="telp">Nomor Telepon</label>
              </div>
            </div>
            <div class="row">
              <p>Status Aktif</p>
              <p>
                <input class="with-gap" name="status" type="radio" id="status1"  />
                <label for="status1">Aktif</label>
              </p>
              <p>
                <input class="with-gap" name="status" type="radio" id="status2"  />
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
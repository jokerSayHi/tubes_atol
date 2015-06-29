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
          <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Profile</span>

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
                <input id="tmpt_lahir" name="tmpt_lahir" required type="text" class="validate">
                <label for="tmpt_lahir">Tempat Lahir</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="tgl_lahir" onchange="tanggalLahir()" type="date" class="datepicker">
                <label for="tgl_lahir">Tanggal Lahir</label>
              </div>
            </div>

            <input type="hidden" name="tanggallahir" id="tanggallahir">

            <div class="row">
              <div class="input-field col s12">
                <input id="no_telp" type="text" nama="no_telp" class="validate">
                <label for="no_telp">Nomor Telepon</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field col s12 input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span><i class="mdi-file-file-upload left"></i> Foto KTP</span>
                  <input type="file" />
                </div>
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
   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

  function tanggalLahir () {
    var date = document.getElementById('tgl_lahir').value;

    var hari = new Date(date).getDate();
    var bulan = new Date(date).getMonth();
    var tahun = new Date(date).getFullYear();

    window.hari = hari;
    var harinya, bulannya;

    if(hari.toString().length === 1){
      harinya = '0' + hari;
    } else {
      harinya = hari;
    }

    if(bulan.toString().length === 1){
      bulannya = '0'+ bulan;
    } else {
      bulannya = bulan;
    }

    $('#tanggallahir').val(tahun + '-' + bulannya + '-' + harinya);

  }
  </script>
</body>
</html>

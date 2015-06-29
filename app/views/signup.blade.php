<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body id="signup">
  <div class="row">
    <div class="col s6 offset-s3 ">
      <div class="card-panel z-depth-3 panel-signup">
        <div class="card-content">
          <div class="green darken-2">&nbsp;<br>&nbsp;</div>
          <div class="card-title green darken-1">
          <a href="/" class="waves-effect waves-light" style="border-radius:50%">
            <i class="mdi-navigation-arrow-back left" style="color:#fff; margin-left:7.5px; margin-right:7.5px"></i>
          </a>
          Signup</div>
          <div style="padding:20px;">

            <div class="row">
              <form class="col s12" method="post" action="/signup" enctype="multipart/form-data">
                <div class="row" style="margin-bottom:10px">

                  {{-- NIK --}}
                  <div class="input-field col s12">
                    <input id="nik" type="text" name="nik" class="validate">
                    <label for="nik">NIK</label>
                  </div>

                  {{-- NAMA --}}
                  <div class="input-field col s12">
                    <input id="nama" type="text" name="nama" class="validate">
                    <label for="nama">Nama</label>
                  </div>

                  {{-- EMAIl --}}
                  <div class="input-field col s12">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Email</label>
                  </div>

                  {{-- PASSWORD --}}
                  <div class="input-field col s12">
                    <input id="password" type="password" name="pass" class="validate">
                    <label for="password">Password</label>
                  </div>

                  {{-- ALAMAT --}}
                  <div class="input-field col s12">
                    <input id="alamat" type="text" name="alamat" class="validate">
                    <label for="alamat">Alamat</label>
                  </div>

                  {{-- TEMPAT LAHIR --}}
                  <div class="input-field col s12">
                    <input id="tempat_lahir" type="text" name="tempat_lahir" class="validate">
                    <label for="tempat_lahir">Tempat Lahir</label>
                  </div>

                  {{-- TANGGAL LAHIR --}}
                  <div class="input-field col s12">
                    <input id="tgl_lahir" onchange="tanggalLahir()" type="date" class="datepicker">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                  </div>

                  <input type="hidden" name="tgl_lahir" id="tanggallahir">


                  {{-- NO TELEPON --}}
                  <div class="input-field col s12">
                    <input id="no_telp" type="number" name="no_telp" class="validate">
                    <label for="no_telp">No Telepon</label>
                  </div>


                    <div class="file-field col s12 input-field">
                      <input class="file-path validate" type="text"/>
                      <div class="btn">
                        <span><i class="mdi-file-file-upload left"></i> Foto KTP</span>
                        <input type="file" name="foto_ktp"/>
                      </div>
                    </div>


                   <button class="btn waves-effect green lighten-1  waves-light" type="submit" name="action" style="margin-top:10px; width:100%;">Submit
                    <i class="mdi-content-send right"></i>
                  </button>

                </div>
              </form>
            </div>

          </div>
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
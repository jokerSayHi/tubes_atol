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
          <span class="card-title grey-text lighten-1" style="padding-left:0">[ID USAHA]</span>

        <table>
          <tbody>

            <tr>
              <td>Nama Usaha</td>
              <td>:</td>
              <td>Nama Usahanya Apaan</td>
            </tr>

            <tr>
              <td>Produk Utama</td>
              <td>:</td>
              <td>Tai Hangat</td>
            </tr>

            <tr>
              <td>Alamat Usaha</td>
              <td>:</td>
              <td>Alamat Usahanya Dimana</td>
            </tr>

            <tr>
              <td>Kelurahan</td>
              <td>:</td>
              <td>kelurahannya dimana</td>
            </tr>

            <tr>
              <td>Sektor</td>
              <td>:</td>
              <td>Sektor nya apaan</td>
            </tr>

            <tr>
              <td>Deskripsi</td>
              <td>:</td>
              <td>Deskripsi nya harus panjang banget</td>
            </tr>

            <tr>
              <td>Telepon</td>
              <td>:</td>
              <td>085xxxxxxxx</td>
            </tr>

            <tr>
              <td>Skala Usaha</td>
              <td>:</td>
              <td>Skalanya berapa besar</td>
            </tr>

            <tr>
              <td colspan="3">
                Peta
              </td>
            </tr>
            <tr>
              <td colspan="3">
                {{-- PAKE JQUERY DARI API --}}
                <img src="https://maps.googleapis.com/maps/api/staticmap?center=-6.886466,107.613777&zoom=17&size=800x250&markers=-6.886466,107.613777" alt="">
                {{-- <img src="http://placehold.it/930x250?text=peta(930x250)" alt=""> --}}
              </td>
            </tr>

            <tr>
              <td colspan="3">
                Gambar
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <img src="http://placehold.it/180x180?text=183x183" alt="">
                <img src="http://placehold.it/180x180?text=gambar2" alt="">
                <img src="http://placehold.it/180x180?text=gambar3" alt="">
                <img src="http://placehold.it/180x180?text=gambar4" alt="">
                <img src="http://placehold.it/180x180?text=gambar5" alt="">
              </td>
            </tr>
            <tr>
              <td>Status Aktif</td>
              <td>:</td>
              <td>Aktif</td>
            </tr>

          </tbody>
        </table>

        {{-- ACTION DELETE DKK --}}
        <div class="card-action">
          <a class="btn-floating btn-large waves-effect waves-light yellow"><i class="mdi-content-create"></i></a>&nbsp;
          <a class="btn-floating btn-large waves-effect waves-light red"><i class="mdi-action-delete"></i></a>
        </div>
        </div>
      </div>
    </div>
  </div>

  <a class="tooltipped btn-floating btn-table btn-large waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Tambah Usaha">
    <i class="mdi-content-add"></i>
  </a>

  @include('includes.scripts')
</body>
</html>

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

      {{-- CONTENT USAHA --}}
      <div class="card card-table col offset-s1 s11" style="width:111%">
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
              <td colspan="3"><img src="http://placehold.it/960x250?text=peta" alt=""></td>
            </tr>

            <tr>
              <td colspan="3">
                Gambar
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <img src="http://placehold.it/183x183?text=gambar1" alt="">
                <img src="http://placehold.it/183x183?text=gambar2" alt="">
                <img src="http://placehold.it/183x183?text=gambar3" alt="">
                <img src="http://placehold.it/183x183?text=gambar4" alt="">
                <img src="http://placehold.it/183x183?text=gambar5" alt="">
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

  @include('includes.scripts')
</body>
</html>
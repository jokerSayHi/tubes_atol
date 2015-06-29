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
      <?php
      foreach ($usaha as $key => $value) {
        $kel = Kelurahan::find($value->id_kelurahan);
        $sektor = Sektor::find($value->id_sektor);
      ?>
      <div class="row">
        <div class="col s12 card card-table">
          <span class="card-title grey-text lighten-1" style="padding-left:0">ID : <?php echo $value->id_usaha; ?></span>

        <table>
          <tbody>
            <tr>
              <td>Nama Usaha</td>
              <td>:</td>
              <td><?php echo $value->nama_usaha; ?></td>
            </tr>

            <tr>
              <td>Produk Utama</td>
              <td>:</td>
              <td><?php echo $value->produk_utama; ?></td>
            </tr>

            <tr>
              <td>Alamat Usaha</td>
              <td>:</td>
              <td><?php echo $value->alamat_usaha; ?></td>
            </tr>

            <tr>
              <td>Kelurahan</td>
              <td>:</td>
              <td><?php echo $kel->nama_kelurahan; ?></td>
            </tr>

            <tr>
              <td>Sektor</td>
              <td>:</td>
              <td><?php echo $sektor->nama_sektor; ?></td>
            </tr>

            <tr>
              <td>Deskripsi</td>
              <td>:</td>
              <td><?php echo $value->deskripsi; ?></td>
            </tr>

            <tr>
              <td>Telepon</td>
              <td>:</td>
              <td><?php echo $value->telp_usaha; ?></td>
            </tr>

            <tr>
              <td>Skala Usaha</td>
              <td>:</td>
              <td><?php echo $value->skala_usaha; ?></td>
            </tr>

            <tr>
              <td colspan="3">
                Peta
              </td>
            </tr>
            <tr>
              <td colspan="3">
                {{-- PAKE JQUERY DARI API --}}
                <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $value->latitude; ?>,<?php echo $value->longitude; ?>&zoom=17&size=800x250&markers=-6.886466,107.613777" alt="">
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
                <img src="/images/usaha/.<?php echo $value->gambar_satu; ?>" width="180" height="180" alt="">
                <img src="/images/usaha/.<?php echo $value->gambar_dua; ?>" width="180" height="180" alt="">
                <img src="/images/usaha/.<?php echo $value->gambar_tiga; ?>" width="180" height="180" alt="">
                <img src="/images/usaha/.<?php echo $value->gambar_empat; ?>" width="180" height="180" alt="">
                <img src="/images/usaha/.<?php echo $value->gambar_lima; ?>" width="180" height="180" alt="">
              </td>
            </tr>
            <tr>
              <td>Status Aktif</td>
              <td>:</td>
              <td><?php if($value->status_aktif == 'Y') echo "Aktif"; else echo "Tidak Aktif"; ?></td>
            </tr>
          </tbody>
        </table>

        {{-- ACTION DELETE DKK --}}
        <div class="card-action">
          <form method="post" action="/usaha/<?php echo $value->id_usaha; ?>">
            <input name="_method" type="hidden" value="DELETE">
            <input name="_token" type="hidden" value="6b5CRRCcCDq0lur2HlN8yt4GpTb5o3dSlQUxCXzN">
            <a class="btn-floating btn-large waves-effect waves-light yellow" href="/usaha/<?php echo $value->id_usaha; ?>/edit"><i class="mdi-content-create"></i></a>&nbsp;
            <button class="btn-floating btn-large waves-effect waves-light red" type="submit">
              <i class="mdi-action-delete"></i>
            </button>
          </form>
        </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>

  <a class="tooltipped btn-floating btn-table btn-large waves-effect waves-light blue" href="/usaha/create" data-position="left" data-delay="50" data-tooltip="Tambah Usaha">
    <i class="mdi-content-add"></i>
  </a>

  @include('includes.scripts')
</body>
</html>

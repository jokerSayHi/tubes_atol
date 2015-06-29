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
          <span class="card-title grey-text lighten-1" style="padding-left:0">Profile</span>

          <table>
            <tbody>
              <tr>
                <td>NIK</td>
                <td>:</td>
                <td>NIK NYA BERAPA</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Namanya Apa</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>Apa Email nya</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Alamat nya dimana</td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>Lahir Dimana</td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>Tanggal Lahir nya berapa</td>
              </tr>
              <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td>Berapa Nomor Teleponnya</td>
              </tr>
              <tr>
                <td>Status Aktif</td>
                <td>:</td>
                <td>Apa Statusnya</td>
              </tr>
              <tr>
                <td colspan="3">
                  <img src="http://placehold.it/350x150?text=KTP" alt="">
                </td>
              </tr>
            </tbody>
          </table>

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
</body>
</html>

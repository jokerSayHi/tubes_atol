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
      <div class="card-panel card-table col offset-s1 s11" style="width:111%">
        <span class="card-title grey-text lighten-1" style="padding-left:0">View User</span>

        <table class="hoverable">
          <thead>
            <tr>
              <th data-field="nip">NIK</th>
              <th data-field="nama">Nama</th>
              <th data-field="email">Email</th>
              <th data-field="telepon">Alamat</th>
              <th data-field="telepon">Telepon</th>
              <th data-field="telepon">KTP</th>
              <th data-field="telepon">Status</th>
              <th data-field="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12345</td>
              <td>Kampret</td>
              <td>kampret@mail.com</td>
              <td>alamat nya panjang ceritanya</td>
              <td>08123123123</td>
              <td><img src="http://placehold.it/230x150" alt=""></td>
              <td>Aktif</td>
              <td>
                 <a class="btn-floating waves-effect waves-light yellow"><i class="mdi-content-create"></i></a>
                 <a class="btn-floating waves-effect waves-light red"><i class="mdi-action-delete"></i></a> &nbsp;
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @include('includes.scripts')
</body>
</html>
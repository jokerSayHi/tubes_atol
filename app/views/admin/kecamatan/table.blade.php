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
        <span class="card-title grey-text lighten-1" style="padding-left:0">View Admin</span>

        <table class="hoverable">
          <thead>
            <tr>
              <th data-field="nip">ID</th>
              <th data-field="nama">Nama Kecamatan</th>
              <th data-field="kode_pos">Kode Pos</th>
              <th data-field="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12345</td>
              <td>Hells</td>
              <td>4545</td>
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

  <a class="btn-floating btn-table btn-large waves-effect waves-light blue"><i class="mdi-content-add"></i></a>

  @include('includes.scripts')
</body>
</html>
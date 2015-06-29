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
            <?php
            foreach ($user as $key => $value) {
              echo "<tr>";
              echo "<td>" . $value->nik . "</td>";
              echo "<td>" . $value->nama . "</td>";
              echo "<td>" . $value->email . "</td>";
              echo "<td>" . $value->alamat . "</td>";
              echo "<td>" . $value->no_telp . "</td>";
              echo "<td><img src=\"/images/" . $value->foto_ktp . "\" alt=\"\" width=\"200\" height=\"113\"></td>";
              echo "<td>" . $value->status_aktif . "</td>";
              ?>
                <form method="POST" action="/dashboard/user/{{ $value->nik }}" accept-charset="UTF-8">
                  <input name="_method" type="hidden" value="DELETE">
                  <input name="_token" type="hidden" value="6b5CRRCcCDq0lur2HlN8yt4GpTb5o3dSlQUxCXzN">
                  <td>
                  <a class="btn-floating waves-effect waves-light yellow" href="/dashboard/user/<?php echo $value->nik; ?>/edit"><i class="mdi-content-create"></i></a>
                  &nbsp;
                  <button class="btn-floating waves-effect waves-light red" type="submit">
                    <i class="mdi-action-delete"></i>
                  </button>
                  </td>
                </form>
              <?php
            }
            ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @include('includes.scripts')
</body>
</html>
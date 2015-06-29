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
              <th data-field="nip">NIP</th>
              <th data-field="nama">Nama</th>
              <th data-field="username">Username</th>
              <th data-field="email">Email</th>
              <th data-field="telepon">Telepon</th>
              <th data-field="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($admin as $key => $value) {
              echo "<tr>";
              echo "<td>" . $value->nip . "</td>";
              echo "<td>" . $value->nama . "</td>";
              echo "<td>" . $value->user . "</td>";
              echo "<td>" . $value->email . "</td>";
              echo "<td>" . $value->no_telp . "</td>";
              ?>
                <td>
                  <a class="btn-floating waves-effect waves-light yellow" href="/dashboard/admin/<?php echo $value->nip; ?>/edit"><i class="mdi-content-create"></i></a>
                  &nbsp;
                </td>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <a class="tooltipped btn-floating btn-table btn-large waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Tambah Data Admin"><i class="mdi-content-add"></i></a>

  @include('includes.scripts')
</body>
</html>
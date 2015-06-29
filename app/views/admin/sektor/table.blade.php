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
        <span class="card-title grey-text lighten-1" style="padding-left:0">View Sektor</span>

        <table class="hoverable">
          <thead>
            <tr>
              <th data-field="nip">ID</th>
              <th data-field="nama">Nama Sektor</th>
              <th data-field="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($sektor as $key => $value) {
              echo "<tr>";
              echo "<td>" . $value->id_sektor . "</td>";
              echo "<td>" . $value->nama_sektor . "</td>";
              ?>
                <form method="POST" action="http://localhost:8000/dashboard/sektor/{{ $value->id_sektor }}" accept-charset="UTF-8">
                  <input name="_method" type="hidden" value="DELETE">
                  <input name="_token" type="hidden" value="6b5CRRCcCDq0lur2HlN8yt4GpTb5o3dSlQUxCXzN">
                  <td>
                  <a class="btn-floating waves-effect waves-light yellow" href="sektor/<?php echo $value->id_sektor; ?>/edit"><i class="mdi-content-create"></i></a>
                  &nbsp;
                  <button class="btn-floating waves-effect waves-light red" type="submit">
                    <i class="mdi-action-delete"></i>
                  </button>
                  </td>
                </form>
              <?php
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <a href="/dashboard/sektor/create" class="tooltipped btn-floating btn-table btn-large waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Tambah Data Sektor"><i class="mdi-content-add"></i></a>

  @include('includes.scripts')
</body>
</html>
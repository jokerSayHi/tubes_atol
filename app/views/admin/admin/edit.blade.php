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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Admin <?php echo $admin->nama; ?></span>
        <div class="row">
          <form class="col s12" method="post" action="/dashboard/admin/<?php echo $admin->nip; ?>">
            <input name="_method" type="hidden" value="PUT">
            <div class="row">
              <div class="input-field col s12">
                <input id="nama" name="nama" required type="text" class="validate" value="<?php echo $admin->nama; ?>">
                <label for="nama">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="user" name="user" required type="text" class="validate" value="<?php echo $admin->user; ?>">
                <label for="user">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" required type="email" class="validate" value="<?php echo $admin->email; ?>">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="telp" name="telp" required type="number" class="validate" value="<?php echo $admin->no_telp; ?>">
                <label for="telp">No Telepon</label>
              </div>
            </div>

            <div class="row center-align">
              <div class="col s6">
                <button class="btn blue lighten-1 btn-block">Submit</button>
              </div>
              <div class="col s6">
                <button class="btn red lighten-1 btn-block" type="reset">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  @include('includes.scripts')
</body>
</html>
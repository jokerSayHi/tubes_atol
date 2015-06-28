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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Tambah Admin</span>
        <div class="row">
          <form class="col s12">
            {{-- <div class="row">
              <div class="input-field col s12">
                <input id="nip" name="nip" required type="text" class="validate">
                <label for="nip">NIP</label>
              </div>
            </div> --}}
            <div class="row">
              <div class="input-field col s12">
                <input id="nama" name="nama" required type="text" class="validate">
                <label for="nama">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="username" name="username" required type="text" class="validate">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" name="password" required type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" required type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="telp" name="telp" required type="Number" class="validate">
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
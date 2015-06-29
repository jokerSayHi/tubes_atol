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
        <span class="card-title grey-text lighten-1" style="padding-left:0">Edit Sektor <?php echo $sektor->nama_sektor; ?></span>
        <div class="row">
          <form class="col s12" method="post" action="/dashboard/sektor/<?php echo $sektor->id_sektor; ?>">
            <input name="_method" type="hidden" value="PUT">
              <div class="input-field col s12">
                <input id="sektor" name="sektor" required type="text" class="validate" value="<?php echo $sektor->nama_sektor; ?>">
                <label for="sektor">Nama Sektor</label>
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
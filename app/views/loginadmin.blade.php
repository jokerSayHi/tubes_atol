<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body style="background-color: #9CFF9F;">
  <div class="row">
    <div class="col s4 offset-s4" style="margin-top: 60px;">
      <div class="card-panel z-depth-3 panel-signup">
        <div class="card-content">
          <div class="green darken-2">&nbsp;<br>&nbsp;</div>
          <div class="card-title green darken-1">Login Admin</div>
          <div style="padding:20px;">

            <div class="row">
              <form class="col s12" method="post" action="login">
                <div class="row" style="margin-bottom:10px">
                  <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix grey-text lighten-2"></i>
                    <input id="nip" type="text" class="validate" name="nip">
                    <label for="nip">NIP</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="mdi-action-lock prefix grey-text lighten-2"></i>
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                  </div>

                   <button class="btn waves-effect green lighten-1  waves-light" type="submit" style="margin-top:10px; width:100%;">Login
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  @include('includes.scripts')
</body>
</html>
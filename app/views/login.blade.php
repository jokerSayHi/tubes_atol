<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body id="login">
  <div class="bg-cover"></div>
  <div class="row">
    <div class="col s4 ">
      <div class="card-panel z-depth-3 panel-login">
        <div class="card-content">
          <div class="green darken-2">&nbsp;<br>&nbsp;</div>
          <div class="card-title green darken-1">
          <a href="/" class="waves-effect waves-light" style="border-radius:50%">
            <i class="mdi-navigation-arrow-back left" style="color:#fff; margin-left:7.5px; margin-right:7.5px"></i>
          </a>
          Login</div>
          <div style="padding:20px;">

            <div class="row">
              <form class="col s12" method="post" action="login">
                <div class="row" style="margin-bottom:10px">
                  <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix grey-text lighten-2"></i>
                    <input id="icon_prefix" type="text" class="validate" name="nik">
                    <label for="icon_prefix">NIK</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="mdi-action-lock prefix grey-text lighten-2"></i>
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                  </div>

                   <button class="btn waves-effect green lighten-1  waves-light" type="submit" style="margin-top:10px; width:100%;">Submit
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
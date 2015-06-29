<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>
  <div class="row">

    {{-- SIDEBAR --}}
    <div class="col s3">
      <div id="slide-out" class="side-nav fixed">
        <div class="center-align">
          <!-- HEADER -->
          <div class="green darken-2" style="30px">&nbsp;</div>
          <div class="title-container green darken-1 white-text">
            <div class="content">
              <p class="img">
                <img src="http://placehold.it/50x50/d32f2f/ffffff?text=AS" style="border-radius:50%">
              </p>
              <p class="name">
                Alfons Santoso
              </p>
            </div>
          </div>
          <!-- FORM -->
          <div class="row">
            @include('includes.navbaruser')
          </div>
        </div>
      </div>
      <!-- FAB -->
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>


    <!-- CONTENT -->
    <div class="col s9 change-pass">
      <div class="row">
        <div class="col s12 card card-table">
          <span class="card-title grey-text lighten-1" style="padding-left:0">Change Password</span>

          <div class="input-field col s12">
            <input id="oldpass" type="password" class="validate">
            <label for="oldpass">Old Password</label>
          </div>

          <div class="input-field col s12">
            <input id="newpass" type="password" class="validate">
            <label for="newpass">New Password</label>
          </div>
          <div class="input-field col s12">
            <input id="newpass2" type="password" class="validate">
            <label for="newpass2">Retype New Password</label>
          </div>
        {{-- ACTION DELETE DKK --}}
        <div class="card-action">
          <a class="btn waves-effect waves-light white-text blue">
            Change
          </a>&nbsp;
          <a class="btn waves-effect waves-light white-text red">reset</a>
        </div>
        </div>
      </div>
    </div>
  </div>

  @include('includes.scripts')
</body>
</html>

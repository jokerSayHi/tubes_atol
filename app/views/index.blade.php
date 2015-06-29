<!doctype html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body>
	<div class="row">
    <div class="col s3">
      <div id="slide-out" class="side-nav fixed">
        <div class="center-align">
          <!-- HEADER -->
          <div class="green darken-2" style="30px">&nbsp;</div>
          <div class="title-container green darken-1 white-text">
          </div>
          <!-- FORM -->
          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3"><a class="active home-tab" href="#search">Search</a></li>
                <li class="tab col s3"><a class="home-tab" href="#filter">Filter</a></li>
              </ul>
            </div>
            <div id="search" class="col s12">
              <!-- SEARCH -->
              <div class="input-field col s12">
                <i class="mdi-action-search prefix"></i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Search</label>
              </div>
              <a class="home-tab-btn waves-effect waves-green btn-flat">Search
                </a>
            </div>
            <div id="filter" class="col s12">
              <!-- FILTER -->
              <div class="input-field col s12">
                <i class="mdi-content-filter-list prefix"></i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Filter</label>
              </div>
              <a class="home-tab-btn waves-effect waves-green btn-flat">Filter
                </a>
            </div>
          </div>
          <!-- FOOTER -->
          <div class="side-footer grey lighten-5">
            <div class="row">
              <div class="col s12 center-align">
                <h2 class="footer-title grey-text text-lighten-1">
                  Account
                </h2>
                <a class="waves-effect green darken-1 white-text waves-light btn btn-flat btn-login">Login</a>
                <p class="signup grey-text text-lighten-1">Tidak punya akun? <a href="/signup" class="green-text text-lighten-1 waves-effect waves-teal btn-flat">&nbsp;Sign Up!</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FAB -->
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
    <!-- MAP -->
    <div class="col s9">
      <div class="map" id="map"></div>
    </div>
    <a class="btn-floating btn-large waves-effect waves-light green fab"><i class="mdi-navigation-menu" id="fab"></i></a>
  </div>

  <!-- MODAL SIGNUP -->
  <div id="signup" class="modal">
    <div class="modal-content center-align">
      <h4>Signup</h4>
      <div class="row">
        <div class="col s6 offset-s3">
          <div class="input-field col s12">
            <input id="name" type="text" class="validate">
            <label class="active" for="name">Name</label>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Sign Up!</a>
    </div>
  </div>

	@include('includes.scripts')
</body>
</html>

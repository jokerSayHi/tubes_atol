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
    <!-- MAP -->
    <div class="col s9">
      <div class="map" id="map"></div>
    </div>
  </div>

  @include('includes.scripts')
</body>
</html>

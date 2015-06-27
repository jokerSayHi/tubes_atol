<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>

   <nav>
    <div class="nav-wrapper green light-1">
      <a href="#" class="brand-logo center">Situs Administrator</a>
    </div>
  </nav>
  <div id="slide-out" class="side-nav fixed">
    @include('includes.menuadmin')
  </div>
  <div class="container">
    <div class="row">
      <div class="card-panel card-table col offset-s2 s11">
        <span class="card-title grey-text lighten-1" style="padding-left:0">Table Mama Lorem</span>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
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
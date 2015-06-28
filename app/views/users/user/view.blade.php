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
    <ul>
      <li class="dashboard-menu"><a href="#!">Dashboard</a></li>
      <li class="dashboard-menu"><a href="#!">Lorem</a></li>
      <li class="dashboard-menu"><a href="#!">Ipsum</a></li>
      <li class="dashboard-menu"><a href="#!">Dolor</a></li>
      <li class="dashboard-menu"><a href="#!">KAMPRET</a></li>
      <li class="dashboard-menu"><a href="#!">Logot</a></li>

    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="card-panel card-table col offset-s2 s11">
        <span class="card-title grey-text lighten-1" style="padding-left:0">Table Mama Lorem</span>

        <table class="hoverable">
          <thead>
            <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <a class="btn-floating btn-table btn-large waves-effect waves-light red"><i class="mdi-content-add"></i></a>

  @include('includes.scripts')
</body>
</html>
<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>

  @include('includes.navbar')
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
        <span class="card-title grey-text lighten-1">Dashbroad</span>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente beatae perspiciatis optio recusandae iste excepturi at. Architecto in accusamus quo veritatis ex, unde, hic ullam! Dolores cumque vero, itaque quia impedit ad architecto repellat molestiae reiciendis! Vero magnam perferendis ipsa obcaecati culpa ipsam porro deleniti natus unde modi ipsum ad aliquam voluptatibus deserunt dolores eius vel fuga atque similique reiciendis consequatur voluptatum, quo placeat quibusdam ducimus. Soluta beatae ab, ullam ut accusamus velit, rem dignissimos neque dolores ducimus nemo consectetur! Laboriosam, architecto inventore in tempora fuga ipsam, perspiciatis repudiandae illo, culpa reiciendis quas. Incidunt fugiat eum nobis nemo sapiente, fugit!</p>
      </div>
    </div>
  </div>

  <div class="fixed-action-btn btn-dashboard" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large mdi-editor-mode-edit"></i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="large mdi-editor-format-quote"></i></a></li>
      <li><a class="btn-floating green"><i class="large mdi-editor-publish"></i></a></li>
      <li><a class="btn-floating blue"><i class="large mdi-editor-attach-file"></i></a></li>
    </ul>
  </div>

  @include('includes.scripts')
</body>
</html>
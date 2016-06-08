<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title><?= $this->data['title'] ?></title>

  <link href="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/css/flat-ui.css" rel="stylesheet">

  <script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/html5shiv.js"></script>
  <script type="text/javascript" src="<?= $this->data['templateRoot'] ?>../default/js/dvwaPage.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?= $this->data['templateRoot'] ?>css/main.css"/>
  <link rel="icon" type="image/ico" href="/favicon.ico"/>
</head>
<body class="home">
<div class="space-container">

  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">
          <!--<img src="<?= $this->data['templateRoot'] ?>../default/images/logo.png" alt="Damn Vulnerable Web Application">-->
          GOTO - HACK ME
        </a>
      </div>
      <?= $this->insert('sections/menu', $this->data) ?>

      <!-- We'll keep the spaceship outside of main to overlap the navbar -->
      <div class="spaceship">
        <img src="<?= $this->data['templateRoot'] ?>images/spaceship.png">
      </div>
    </div>
  </nav>

  <main>
    <div class="astronaut">
      <img src="<?= $this->data['templateRoot'] ?>images/astronaut.png">
    </div>

    <div class="planet-1">
      <img src="<?= $this->data['templateRoot'] ?>images/planet-1.png">
    </div>

    <div class="planet-2">
      <img src="<?= $this->data['templateRoot'] ?>images/planet-2.png">
    </div>

    <?= $this->section('content') ?>

    <?= $this->insert('sections/messages', $this->data) ?>

    <div class="info">
      <?= $this->insert('sections/page_buttons', $this->data) ?>
    </div>

  </main>

  <footer>
    <div class="inner-container container-fluid">
      <?= $this->insert('sections/system_info', $this->data) ?>

      <div class="row">
        <div class="col-md-12 text-center">
          <small>Damn Vulnerable Web Application (DVWA) v<?= $this->data['version'] ?></small>
        </div>
      </div>
    </div>
  </footer>

</div>
<script src="<?= $this->data['templateRoot'] ?>node_modules/marked/lib/marked.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/jquery-2.0.3.min.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/jquery.placeholder.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/jquery.stacktable.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/jquery.tagsinput.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/bootstrap.min.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/bootstrap-select.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/bootstrap-switch.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/bootstrap-typeahead.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/flatui-checkbox.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/flatui-radio.js"></script>
<script src="<?= $this->data['templateRoot'] ?>node_modules/flat-ui/js/application.js"></script>
<script src="<?= $this->data['templateRoot'] ?>js/space-theme.js"></script>
</body>
</html>

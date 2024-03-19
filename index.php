<!doctype html>
<html lang="it" data-bs-theme="auto">
  <head>
    <script src="assets/bootstrap/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Saci Group </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">-->

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css">
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <?php include("../portale/header.php"); ?>

<div class="container-fluid">
  <div class="row">
    <?php include("../portale/menu.php"); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestione</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>
<div class="modal fade" id="viewIlleciti" tabindex="-1" aria-labelledby="viewIllecitiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="viewIllecitiLabel">Visualizza descrizione Illeciti</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 ms-auto">
              <p>Segnalatore: <b><span id="view-segnalatore"></span></b></p>
              <p>Segnalato: <b><span id="view-segnalato"></span></b></p>
              <p>Data Segnalazione: <b><span id="view-data"></span></b></p>
              <p>Motivazione: <b><span id="view-motivazione"></span></b></p>
              <p>Testo Segnalazione: </p>
              <p id="view-testo"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <h2>Gestione Illeciti (Whistleblowing)</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm" id="tabella">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Segnalatore</th>
              <th scope="col">Segnalato</th>
              <th scope="col">Data Segnalazione</th>
              <th scope="col">Motivazione</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody >
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<!-- jQuery library -->
<script src="assets/jquery/jquery-3.7.1.min.js"></script>
<script src="assets/jquery-ui/jquery-ui.js"></script>
<script src="assets/jquery-ui/datepicker-it.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/fontawesome/js/all.min.js"></script>
<script src="assets/service.js"></script>
<script>
  $(document).ready(function () {
    $("#inputnascita").datepicker($.datepicker.regional['it']);
    $("#inputeng").datepicker($.datepicker.regional['it']);
});
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>

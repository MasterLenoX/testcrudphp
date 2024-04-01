<?php include('include/conn.php'); ?>
<?php include('include/header.php');?>

    <div class="container"><br><br>
      <h1 class="text-center text-lg">Fisher Farms Inc. Test</h1>
      <div class="row">
        <div class="col-lg-10">
          <p>
            <h2 class="text-center">PHP OOP Mysqli CRUD (Create Read Update and Delete) Jquery AJAX with Bootstrap 5 Modal Example</h2>
          </p>
        </div>
        <div class="col-lg-2">
          <a id="add" class="btn btn-primary btn-lg"><i class="bi bi-clipboard2-plus-fill"></i> Add New</a>
        </div>
        <br><br><br><br>
          <div id="alert" class="alert alert-success" style="display: none;">
            <center><span id="alerttext"></span></center>
          </div>
        <div id="table"></div>

        <?php include('include/modal.php'); ?>
      </div>
    </div>

<?php include('include/footer.php'); ?>
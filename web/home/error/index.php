<?php
  if(isset($_GET['error_message'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Data</title>
    <?php
    include "../header/header.php";
    ?>
</head>

    <body>
      <?php
      include "../header/navigation.php";
      ?>
        <div class="wrapper-page">
            <div class="ex-page-content text-center">
              <br/><br/><br/>
                <div class="text-error">404</div>
                <h3 class="text-uppercase font-600">Project Name Already Exists</h3>
                <p class="text-muted">
                    Try creating a project with another name.
                </p>
                <br>
                <a class="btn btn-success waves-effect waves-light" href="../data/new_project.php">Return to creating a new project</a>

            </div>
        </div>
        <!-- End wrapper page -->

        <?php
        include "../footer/footer.php";
        ?>

	</body>
</html>

<?php
}
?>

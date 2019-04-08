<?php include "../api_endpoint/api.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>New Project</title>
        <?php
        include "../header/header.php";
        ?>
    </head>

    <body>
        <?php
        include "../header/navigation.php";
        ?>
        <div class="wrapper">
            <div class="container-fluid">
              <br/><br/>
              <div class="row">
              <div class="col-md-12">
                  <div class="card-box">
                      <h4 class="m-t-0 m-b-30 header-title">Project Details</h4>

                      <form role="form" action="<?php echo $api_base_url."server/create_project.php"; ?>" method="GET">
                          <div class="form-group">
                              <label for="projectInputText">Project Name</label>
                              <input type="text" class="form-control" name="new_project_name" id="projectInputText" aria-describedby="textHelp" placeholder="Enter Project Name" autocomplete="off">
                              <small id="textHelp" class="form-text text-muted">Think of something cool!</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
              <!-- end col -->
              </div>
            </div> <!-- end container -->



        </div>
        <!-- end wrapper -->
       <?php
       include "../footer/footer.php";
       ?>
    </body>

</html>

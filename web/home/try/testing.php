<?php include "../api_endpoint/api.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>User based testing</title>
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
                      <h5>Supply a single or a set of wine reviews and determine if they were positivily or negatively said.</h5>

                      <form role="form" action="<?php echo $api_base_url."server/create_project.php"; ?>" method="GET">
                          <div class="form-group">
                              <label for="reviewText">Supply wine review(s)</label>
                              <textarea name="review_text" id="reviewText" class="form-control" rows="4" required autocomplete="off"></textarea>
                              <small id="textHelp" class="form-text text-muted">You can visit this site to pick one. <a href="https://winemag.com" target="_blank">Winemag!</a></small>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block">Determine now!</button>
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
       <script type="text/javascript">
           $(document).ready(function() {
               $('form').parsley();
           });
       </script>
    </body>

</html>

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
                      <h5>Supply a wine review and determine if it was positively or negatively said.</h5>

                      <form role="form" action="<?php echo $api_base_url."server/__server_python__/test.php"; ?>" method="GET">
                          <div class="form-group">
                              <label for="reviewText">Supply a wine review</label>
                              <input type="hidden" name="custom_dataset" value="Yes">
                              <textarea name="data" id="reviewText" class="form-control" rows="4" required autocomplete="off"></textarea>
                              <small id="textHelp" class="form-text text-muted">You can visit this site to pick one. <a href="https://www.winemag.com/?s=&search_type=reviews&drink_type=wine" target="_blank">Winemag!</a></small>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block">Determine now!</button>
                      </form>
                  </div>

              </div>
              <!-- end col -->
              </div>
            <?php if(isset($_GET["response"])){ ?>
              <div class="row">
              <div class="col-md-12">
                  <div class="card-box">
                      <h5>The Response </h5>
                      <div style="font-size: 18px;"><i><?php echo $_GET["data"]; ?></i></div>
                      <div style="font-size:23px;"><span class="badge badge-primary"><?php echo $_GET["response"]; ?></span></div>
                  </div>
              </div>
              <!-- end col -->
              </div>
            <?php } ?>
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

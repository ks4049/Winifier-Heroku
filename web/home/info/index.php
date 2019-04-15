<?php include "../api_endpoint/api.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Search</title>
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
      <form role="form" action="<?php echo "/home/info/loading.php" ?>" method="GET" data-parsley-validate>
          <div class="form-group">
              <label for="dataInputText">Search</label>
              <input type="text" class="form-control" required  name="search_text" id="dataInputText" placeholder="Search for something" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Search</button>
      </form>
  </div>
</div>
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

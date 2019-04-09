<?php include "../api_endpoint/api.php"; ?>
<?php if(isset($_GET["project_name"])){
  $project_name = trim($_GET["project_name"]);
  $res="";
  if(isset($_GET["res"])) {
    $res = $_GET['res'];
  }
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
    <div class="wrapper">
      <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
          <div class="col-sm-12">
            <h4 class="page-title">Project Structure</h4>
          </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
          <div class="col-md-4">
            <div class="card-box">
              <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Action</a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
              </div>

              <h2 class="header-title m-t-0 m-b-30"><span class="badge badge-secondary"><?php echo $project_name; ?></span></h2>
              <div id="tree-structure"></div>

            </div>
          </div><!-- end col -->
          <div class="col-md-8">
              <div class="card-box">
                  <div class="dropdown pull-right">
                      <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Action</a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                      </div>
                  </div>

                  <h4 class="header-title m-t-0 m-b-30">Preview</h4>
                  <div id="fileContents"></div>
              </div>
          </div><!-- end col -->
        </div>
        <!-- end row -->
      </div> <!-- end container -->

    </div>
    <!-- end wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

    function open_file(path){
      console.log(path);
      $.ajax({url: '<?php echo $api_base_url."server/get_contents.php?file_path=" ?>'+path,
      success: function(result){
      $("#fileContents").html('<pre>'+result+'</pre>');
      }});
    }

    $(document).ready(function(){
      $.ajax({url: '<?php echo $api_base_url."server/get_directory_structure.php?project_name=".$project_name; ?>',
      success: function(result){
    console.log(JSON.parse(result)["structure"]);
    $("#tree-structure").html(JSON.parse(result)["structure"]);
    $('.file').css("color","white");
    $('.file').css("cursor","pointer");
    $('.file :before').css("cursor","pointer");
    $('.file :hover').css("cursor","hand");
    $('.folder').css("color","white");
    $('.folder').css("cursor","context-menu");
    $('.folder').addClass("mdi mdi-folder");
    $('.file').addClass("mdi mdi-file");
    $('.folder').css("list-style-type","none");
    $('.file').css("list-style-type","none");





    }
  });

});
</script>


<?php
include "../footer/footer.php";
?>
</body>
</html>
<?php } ?>

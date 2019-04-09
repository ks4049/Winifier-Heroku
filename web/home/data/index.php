<?php include "../api_endpoint/api.php"; ?>
<?php if(isset($_GET["project_name"])){
  $project_name = trim($_GET["project_name"]);
  if(isset($_GET["trainOn"])){
    $previewMessage = "Training log will be generated. Other Results will be available on the left panel!<br/><i class=\"fa fa-spin fa-circle-o-notch\"></i> Loading ...";
  }
  else{
    $previewMessage = "Click on a file from the left panel to preview it!";
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
          <div class="col-sm-8">
            <h4 class="page-title">Project Structure</h4>
          </div>
          <div class="col-sm-2">
            <br/>
          <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='upload_data.php?project_name=<?php echo $project_name; ?>';">Load Another Dataset</button>
        </div>
          <div class="col-sm-2">
            <br/>
          <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='process.php?project_name=<?php echo $project_name; ?>';">Go To Training Process</button>
        </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
          <div class="col-md-4">
            <div class="card-box">
              <!--
              <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="javascript:void(0);" class="dropdown-item">Action</a>
                  <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                  <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                  <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
              </div>-->

              <h2 class="header-title m-t-0 m-b-30"><span class="badge badge-secondary"><?php echo $project_name; ?></span></h2>
              <div id="tree-structure"><b><center><i class="fa fa-spin fa-circle-o-notch"></i> Loading ...</center></b></div>

            </div>
          </div><!-- end col -->
          <div class="col-md-8">
              <div class="card-box">
                <!--
                  <div class="dropdown pull-right">
                      <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a href="javascript:void(0);" class="dropdown-item">Action</a>
                          <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                          <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                          <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                      </div>
                  </div>-->

                  <h4 class="header-title m-t-0 m-b-30">Preview</h4>
                  <div id="fileContents"><pre><?php echo $previewMessage; ?></pre></div>
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
      $("#fileContents").html('<pre><i class=\"fa fa-spin fa-circle-o-notch\"></i> Loading ...</pre>');
      $.ajax({url: '<?php echo $api_base_url."server/get_contents.php?file_path=" ?>'+path,
      success: function(result){
      $("#fileContents").html('<pre>'+result+'</pre>');
      }});
    }

    $(document).ready(function(){
      setInterval(function() {
      $.ajax({url: '<?php echo $api_base_url."server/get_directory_structure.php?project_name=".$project_name; ?>',
      success: function(result){
    console.log(JSON.parse(result)["structure"]);
    $("#tree-structure").html(JSON.parse(result)["structure"]);
    $('.file').css("color","#fff");
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
},2000);
});
</script>

<?php
if(
  isset($_GET['algorithm']) &&
  isset($_GET['project_name']) &&
  isset($_GET['dataset-size']) &&
  isset($_GET['dataset-location']) &&
  isset($_GET['type']) &&
  isset($_GET['value'])
){
  $algorithm = $_GET['algorithm'];
  $project = $_GET['project_name'];
  $datasetSize = $_GET['dataset-size'];
  $datasetLocation = $_GET['dataset-location'];
  $type = $_GET['type'];
  $value = $_GET['value'];
  ?>
  <script>
  $.ajax({url: '<?php echo $api_base_url."__original__/train.php?algorithm=".$algorithm."&project_name=".$project."&dataset-size=".$datasetSize."&dataset-location=".$datasetLocation."&type=".$type."&value=".$value; ?>',
  success: function(result){
    $('#fileContents').html("<pre>Training Log ... </pre>");
    $('#fileContents').append(result);
  }});
  </script>
  <?php
}
 ?>

<?php
include "../footer/footer.php";
?>

</body>
</html>
<?php } ?>

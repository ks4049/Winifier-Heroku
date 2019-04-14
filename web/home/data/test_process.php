<?php include "../api_endpoint/api.php"; ?>
<?php if(isset($_GET["project_name"])){
  $project_name = trim($_GET["project_name"]);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Testing Process</title>
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
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Testing Process</h4>
                            <p class="text-muted m-b-30 font-14">
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form id="testingDataForm" class="form-horizontal" role="form" action="index.php" method="GET">
                                          <input type="hidden" name="testOn" value="yes">
                                          <input type="hidden" name="project_name" value="<?php echo $project_name; ?>">
                                          <input type="hidden" name="meta-component" id="meta-component" value="">
                                          <input type="hidden" name="meta-component-model" id="meta-component-model" value="">

                                          <div class="form-group row">
                                              <label class="col-2 col-form-label">Dataset Limit</label>
                                              <div class="col-md-10">
                                                  <input class="form-control" type="number" name="dataset-size">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-2 col-form-label">Select a Dataset</label>
                                              <div class="col-10">
                                                  <select id="datasetOptions" name="dataset-location" class="form-control" onchange="loadMeta();" required>
                                                  </select>
                                                  <small id="datasetSource" class="form-text text-muted"></small>
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-2 col-form-label">Select a Model</label>
                                              <div class="col-10">
                                                  <select id="modelOptions" name="model-location" class="form-control" onchange="loadModelMeta();" required>
                                                  </select>
                                                  <small id="modelSource" class="form-text text-muted"></small>
                                              </div>
                                          </div>

                                          <div class="row"><div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">Start Testing Process</button>
                                          </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
</div>
</div>

<?php
include "../footer/footer.php";
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $.ajax({url: '<?php echo $api_base_url."server/get_dataset.php?testing_data=yes&project_name=".$project_name; ?>',
  success: function(result){
    console.log(result);
    $("#datasetOptions").html('\<option\>Select Dataset\<\/option\>');
$("#datasetOptions").append(JSON.parse(result)["options"]);
}
});

$.ajax({url: '<?php echo $api_base_url."server/get_model.php?project_name=".$project_name; ?>',
success: function(result){
  console.log(result);
  $("#modelOptions").html('\<option\>Select Model\<\/option\>');
$("#modelOptions").append(JSON.parse(result)["options"]);
}
});
});
</script>
<script>
function loadMeta(){
  var option_selected = document.getElementById("datasetOptions").selectedIndex;
  var meta = document.getElementsByTagName("option")[option_selected].getAttribute("meta");
  $('#datasetSource').html('<b style="margin-left:5px; font-size:12px">'+meta+'</b>');
  $('#meta-component').val(meta);
}

function loadModelMeta(){
  var counterInc = $('#datasetOptions').length+1;
  var option_selected = document.getElementById("modelOptions").selectedIndex+counterInc;
  console.log(document.getElementsByTagName("option")[option_selected]);
  var meta = document.getElementsByTagName("option")[option_selected].getAttribute("metam");
  $('#modelSource').html('<b style="margin-left:5px; font-size:12px">'+meta+'</b>');
  $('#meta-component-model').val(meta);
}
</script>
</html>
<?php } ?>

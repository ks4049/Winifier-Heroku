<?php include "../api_endpoint/api.php"; ?>
<?php if(isset($_GET["project_name"])){
  $project_name = trim($_GET["project_name"]);
  if(isset($_GET["algorithm"])){
    $algorithm = $_GET["algorithm"];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Training Process</title>
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
<?php
if(isset($algorithm)){
?>
<br/><br/>
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><?php echo ucfirst($algorithm); ?> Naive Bayes</h4>
                            <p class="text-muted m-b-30 font-14">
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form id="trainingDataForm" class="form-horizontal" role="form" action="index.php" method="GET">
                                          <input type="hidden" name="trainOn" value="yes">
                                          <input type="hidden" name="algorithm" value="<?php echo $algorithm; ?>">
                                          <input type="hidden" name="project_name" value="<?php echo $project_name; ?>">
                                          <input type="hidden" name="meta-component" id="meta-component" value="">

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
                                              <label class="col-2 col-form-label">Test Options</label>
                                              <div class="col-10">
                                                  <select class="form-control" name="type" id="testOption" onchange="showTestOption();" required>
                                                    <option>Select Test Option</option>
                                                      <option>Cross Validation</option>
                                                      <option>Percentage Split</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div id="optionsWithSubmission"></div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
                <?php
}else{
?>
<div class="row" style="margin-top: 15%;">
  <div class="col-sm-6">
    <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='process.php?project_name=<?php echo $project_name; ?>&algorithm=bernoulli';">Bernoulli Naive Bayes</button>
  </div>
  <div class="col-sm-6">
    <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='process.php?project_name=<?php echo $project_name; ?>&algorithm=multinomial';">Multinomial Naive Bayes</button>
  </div>
</div>
<?php } ?>
</div>
</div>

<?php
include "../footer/footer.php";
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $.ajax({url: '<?php echo $api_base_url."server/get_dataset.php?project_name=".$project_name; ?>',
  success: function(result){
    console.log(result);
    $("#datasetOptions").html('\<option\>Select Dataset\<\/option\>');
$("#datasetOptions").append(JSON.parse(result)["options"]);
}
});
});
</script>
<script>
function showTestOption(){
  var option = document.getElementById("testOption");
  if(option.value=='Cross Validation'){
  $("#optionsWithSubmission").html('\<div class=\"form-group row\"\>\<label class\=\"col-2 col-form-label\"\>Number of Folds\<\/label\>\<div class\=\"col-md-10\"\>\<input class\=\"form-control\" type\=\"number\" name\=\"value\"\>\<\/div\>\<\/div\>');
  $("#optionsWithSubmission").append('\<div class=\"row\"\>\<div class\=\"col-12\"\>\<button type\=\"submit\" class\=\"btn btn-primary btn-block\"\>Start Training Process\<\/button\>\<\/div\>\<\/div\>');
}
else if(option.value=='Percentage Split'){
  $("#optionsWithSubmission").html('\<div class=\"form-group row\"\>\<label class\=\"col-2 col-form-label\"\>Percentage\<\/label\>\<div class\=\"col-md-10\"\>\<input class\=\"form-control\" type\=\"number\" name\=\"value\"\>\<\/div\>\<\/div\>');
  $("#optionsWithSubmission").append('\<div class=\"row\"\>\<div class\=\"col-12\"\>\<button type\=\"submit\" class\=\"btn btn-primary btn-block\"\>Start Training Process\<\/button\>\<\/div\>\<\/div\>');
}
else{
  $("#optionsWithSubmission").html('');
}
}

function loadMeta(){
  var option_selected = document.getElementById("datasetOptions").selectedIndex;
  var meta = document.getElementsByTagName("option")[option_selected].getAttribute("meta");
  $('#datasetSource').html('<b style="margin-left:5px; font-size:12px">'+meta+'</b>');
  $('#meta-component').val(meta);

}
</script>
</html>
<?php } ?>

<?php include "../api_endpoint/api.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Existing Projects</title>
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
<br/><br/><br/>
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                          <?php $flag=0; ?>
                          <?php if (isset($_GET["message"])){
                            if($_GET["message"]=="testing"){
                              $message = "Select a Project";
                              $flag = 1;
                            }
                            else{
                              $message = "Existing Projects";

                            }
                          }
                          ?>
                            <h4 class="page-title"><?php echo $message; ?></h4>

                            <p class="text-muted m-b-30 font-14">
                            </p>
                            <?php if($flag==0) { ?>
                            <div class="row">
                                <div class="col-sm-4">
                                    <button type="button" onclick="location.href='new_project.php';" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-20">Create New Project</button>
                                </div>
                            </div>
                          <?php } ?>
                            <div class="row" id="project-data">
                            </div>


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
$.ajax({url: '<?php echo $api_base_url."server/get_existing_projects.php"; ?>',
success: function(result){
  var objJSON = JSON.parse(result);
  for (var i = 0, len = objJSON.length; i < len; ++i) {
     var item = objJSON[i];
     console.log(item);
     var project = item.project_name;
     var project_name = "";
     if(project.length>10){
       project_name = project.substring(0,9)+" ...";
     }
     else{
       project_name = project;
     }
     var percentage = item.percentage;
     var count = item.model_files_count;
     var trained="Yet to be trained";
     var tested="Yet to be tested";
     var colorTr="badge-danger";
     var colorTe="badge-danger";
     if(item.trained===true){
       trained="Trained";
       colorTr="badge-success";
     }
     if(item.tested===true){
       tested="Tested";
       colorTe="badge-success";
     }
     $("#project-data").append('<div class="col-xl-4"> <div class="card-box project-box"> <div class="badge '+colorTr+'">'+trained+'</div><br/> <div class="badge '+colorTe+'">'+tested+'</div><h4 class="mt-0"><a href="index.php?project_name='+project+'" class="text-white">'+project_name+'</a></h4><ul class="list-inline"><li class="list-inline-item"><h3 class="mb-0">'+count+'</h3><p class="text-muted">Number of Models</p></li></ul><p class="font-600 m-b-5">Progress <span class="text-success pull-right">'+percentage+'%</span></p><div class="progress progress-bar-success-alt progress-sm m-b-5"><div class="progress-bar progress-bar-success progress-animated wow animated animated" role="progressbar" aria-valuenow="'+percentage+'" aria-valuemin="0" aria-valuemax="100" style="width: '+percentage+'%; visibility: visible; animation-name: animationProgress;"> </div><!-- /.progress-bar .progress-bar-danger --> </div><!-- /.progress .no-rounded --> </div> </div><!-- end col-->');
 }
}});
</script>

</html>

<?php include "../api_endpoint/api.php"; ?>
<?php if(isset($_GET["project_name"])){
  $project_name = trim($_GET["project_name"]);
?>
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
                            <h4 class="page-title">Existing Projects</h4>

                            <p class="text-muted m-b-30 font-14">
                            </p>

                            <div class="row">
                                <div class="col-sm-4">
                                    <button type="button" onclick="location.href='new_project.php';" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-20">Create New Project</button>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card-box project-box">
                                        <div class="badge badge-success">Completed</div>
                                        <h4 class="mt-0"><a href="" class="text-white">New Admin Design</a></h4>

                                        <p class="text-success text-uppercase m-b-20 font-13">Web Design</p>
                                        <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. When an unknown printer took a galley of type and
                                            scrambled it...<a href="#" class="font-600 text-muted">view more</a>
                                        </p>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <h3 class="mb-0">56</h3>
                                                <p class="text-muted">Questions</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h3 class="mb-0">452</h3>
                                                <p class="text-muted">Comments</p>
                                            </li>
                                        </ul>

                                        <p class="font-600 m-b-5">Progress <span class="text-success pull-right">80%</span></p>
                                        <div class="progress progress-bar-success-alt progress-sm m-b-5">
                                            <div class="progress-bar progress-bar-success progress-animated wow animated animated"
                                                 role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 80%; visibility: visible; animation-name: animationProgress;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->

                                    </div>
                                </div><!-- end col-->
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
function loadProjectsData(){

}
</script>
</html>
<?php } ?>

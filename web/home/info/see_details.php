<?php include "../api_endpoint/api.php"; ?>

<?php if(isset($_GET["id"])) {?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $.ajax({url: '<?php echo 'https://pothole.ml/php/get_mongo_details.php?ID='.$_GET["id"]; ?>',
  success: function(result){
    var resultArr = JSON.parse(result)[0];
    console.log(resultArr);
    $('#province').html("<span class=\"badge badge-info\">Province - "+resultArr["Province"]+"</span>");
    $('#country').html("<span class=\"badge badge-info\">Country - "+resultArr["Country"]+"</span>");
    $('#winery').html("<span class=\"badge badge-info\"> Winery - "+resultArr["Winery"]+"</span>");
    $('#reviewText').html("<i>"+resultArr["Review"]+"</i>");
    $('#region').html("<span class=\"badge badge-info\">Region - "+resultArr["Region"]+"</span>");
    $('#rating').html("Rating - "+resultArr["Rating"]);
    $('#price').html("Price (in $) - "+resultArr["Price"]);
    $('#designation').html("<span class=\"badge badge-info\">Designation - "+resultArr["Designation"]+"</span>");
    $('#variety').html("<span class=\"badge badge-info\">Variety - "+resultArr["Variety"]+"</span>");
}
});
});
</script>
<?php }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Review | Details</title>
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
    <div class="col-sm-12">
        <div class="bg-picture card-box">
            <div class="profile-info-name">
                <img src="../assets/images/wine_logo.jpg"
                     class="img-thumbnail" alt="profile-image">
                <div class="profile-info-detail">
                    <p><span class="badge badge-success badge-lg" id="price"></span></p>
                    <p><span class="badge badge-primary" id="rating"><i class="fa fa-spin fa-circle-o-notch"></i> Fetching Review Details</span></p>
                    <br/>
                    <p style="font-size: 16px; font-weight:bold;" id="reviewText"></p>
                    <div class="row">
                    <div class="col-sm-6">
                    <p id="country"></p>
                    <p id="province"></p>
                    <p id="region"></p>
                  </div>
                    <div class="col-sm-6">
                    <p id="winery"></p>
                    <p id="variety"></p>
                    <p id="designation"></p>
                  </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
      </div>
    </div>
        <!--/ meta -->
    </div>
</div>
    <?php
    include "../footer/footer.php";
    ?>
</body>
</html>

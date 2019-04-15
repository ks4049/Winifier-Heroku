<?php include "../api_endpoint/api.php"; ?>

<?php if(isset($_GET["search_text"])) {?>
  <?php $query = $_GET["search_text"]; ?>
  <form style="display: hidden" action=<?php echo "/home/info/search.php";?> method="POST" id="form">
    <input type="hidden" id="results" name="search_text" value=""/>
    <input type="hidden" id="results" name="query" value="<?php echo $query; ?>"/>

  </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $.ajax({url: '<?php echo 'http://162.243.164.113/mongo_connect.php?term='.$_GET["search_text"]; ?>',
  success: function(result){
    console.log(result);
    $('#results').val(result);
    $('#form').submit();
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
  <title>Loading</title>
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
      <div><i style="font-size: 20px;"><center><i class="fa fa-spin fa-circle-o-notch"></i> Fetching Results .... </center></i> </div>
  </div>
</div>
    <?php
    include "../footer/footer.php";
    ?>


</body>
</html>

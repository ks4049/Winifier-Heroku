<?php include "../api_endpoint/api.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Search</title>
  <?php
  include "../header/header.php";
  ?>
  <!-- DataTables -->
  <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- Responsive datatable examples -->
  <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <?php
  include "../header/navigation.php";
  ?>
  <div class="wrapper">
    <div class="container-fluid">
      <br/><br/>
      <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
          <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light" onclick="location.href='/home/info/index.php';">Search Something Else</button>
        </div>
        <br/><br/>
      </div>
      <div class="row">
          <div class="col-12">
              <div class="card-box table-responsive">
                  <h4 class="m-t-0 header-title">Search Results for  <span class="badge badge-primary"><?php echo $_POST["query"]; ?></span></h4>

                  <p class="text-muted font-14 m-b-30">
                      Here we display wine reviews using boolean retrieval. (Max 400 Results!)
                  </p>

                  <?php echo $_POST["search_text"]; ?>
              </div>
          </div>
      </div> <!-- end row -->
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


    <!-- Required datatable js -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables/jszip.min.js"></script>
    <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.print.min.js"></script>

    <!-- Key Tables -->
    <script src="../assets/plugins/datatables/dataTables.keyTable.min.js"></script>

    <!-- Responsive examples -->
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Selection table -->
    <script src="../assets/plugins/datatables/dataTables.select.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>



</body>
</html>

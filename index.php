
<?php
require_once("backend/config.php");
require_once("backend/Classes/Menu.php");
$menu = new Menu($con);

?>

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">

                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">Bilgiler</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="container">
                                <div class="row mt-5">
                                    <div class="col">
                                <table class="table table-light">
                                    <thead class="table-dark">
                                        <tr>

                                            <th>#</th>
                                            <th>İsim</th>
                                            <th>Soyisim</th>
                                            <th>Okul</th>
                                            <th>No</th>


                                        </tr>

                                        <tbody class="sortable" id="result">
                                        <?php echo $menu->showAllMenu();  ?>

                                          </thead>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
                  <script>
                $( function() {
                  $(".sortable").sortable({
                    connectWith: ".connectedSortable"
                  }).disableSelection();
                } );
                </script>

            <!-- /.row -->
      <!-- /.container-fluid -->

    <!-- /.content -->

<!-- /.content-wrapper -->

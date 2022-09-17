<?php include 'connection.php';
require 'session.php';
 

  ?>
<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  
  Session::destroy();
  include 'login.php';
}



 ?>
 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toll gate management</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

<?php include 'header2.php'?>
<?php include 'sidebar2.php'?>

    <div id="wrapper">

      <!-- Sidebar -->
   
      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- Breadcrumbs-->
          
            </li>
        
           <div class="col-lg-12">
                                 <div> 
            <i class="fas fa-table"></i>

            </div>  <br> </br>
                                
                        <div class="table-responsive">
                           <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                                    <tr>
                                        <th>Fair</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM toll_fare';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {

                           echo '<tr>';
                           
                            echo '<td>'. $row['FARE'].'</td>';
                            echo '<td>'. $row['START'].'</td>';
                            echo '<td>'. $row['FINISH'].'</td>';
                                             
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php include 'footer.php'; ?>
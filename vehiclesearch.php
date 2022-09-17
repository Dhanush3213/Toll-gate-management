
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header" style="background-image: linear-gradient(grey,#7216);"> <h2>Check Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(#7216,grey);">

<?php
$query = 'SELECT * FROM vehicle
              WHERE
              VEHICLE_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['VEHICLE_ID'];
                $i= $row['VEHICLE_NAME'];
                $a=$row['VEHICLE_TYPE'];
                $b=$row['DRIVER_ID'];
              }
              
              $id = $_GET['id'];
         
?>


                        <form role="form" method="post" action="vehicle.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle Name" name="VEHICLE_NAME" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehcle Type" name="VEHICLE_TYPE" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Driver ID" name="DRIVER_ID" value="<?php echo $b; ?>">
                            </div>
                            <button type="submit" class="btn btn-xs btn-dark">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>


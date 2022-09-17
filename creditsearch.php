
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"style="background-image: linear-gradient( #014923,black);text-color:white;"><center><h2 style="color:grey;">Check Record</h2> </center> </div>
<div class="card-body" style="background-image: linear-gradient(black, #014923);">

<?php
$query = 'SELECT * FROM credit
              WHERE
             CREDIT_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {  
               
                $i= $row['CREDIT_ID'];
                $a= $row['CREDIT_AMOUNT'];
                $c=$row['TOP_UP_DATE'];
                $b=$row['VEHICLE_ID'];
              }
              
              $id = $_GET['id'];
         
?>


                        <form role="form" method="post" action="credit.php">
                            
                           
                            <div class="form-group">
                              <input class="form-control" placeholder="Credit id" name="CREDIT_ID" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Credit amount" name="CREDIT_AMOUNT" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Top_up_date" name="TOP_UP_DATE" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle ID" name="VEHICLE_ID" value="<?php echo $b; ?>">
                            </div>
                            <center>  <button type="submit" class="btn btn-xs btn-dark">Return to main menu</button></center> 
                         


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


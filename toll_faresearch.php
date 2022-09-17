
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"style="background-image: linear-gradient(grey,#7216);"> <h2>Check Record</h2> </div>
<div class="card-body"style="background-image: linear-gradient(#7216,grey);">

<?php
$query = 'SELECT * FROM toll_fare
              WHERE
              FARE_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['FARE_ID'];
                $i= $row['FARE'];
                $a=$row['START'];
                $b=$row['FINISH'];
              }
              
              $id = $_GET['id'];
         
?>


                        <form role="form" method="post" action="toll_fare.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Fare" name="FARE" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Start" name="START" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Finish" name="FINISH" value="<?php echo $b; ?>">
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


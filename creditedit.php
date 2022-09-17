<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM credit
              WHERE
              CREDIT_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['CREDIT_ID'];
                $i= $row['CREDIT_AMOUNT'];
                $a=$row['TOP_UP_DATE'];
                $b=$row['VEHICLE_ID'];
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12"style="background-image: linear-gradient(black, #014923);">
             <center> <h2 style="color:grey;">Edit Records</h2></center>
                      <div class="col-lg-center">

                        <form role="form" method="post" action="creditedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="CREDIT ID" name="CREDIT_ID" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="CREDIT AMOUNT" name="CREDIT_AMOUNT" value="<?php echo $i; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="TOP UP DATE" name="TOP_UP_DATE" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle ID" name="VEHICLE_ID" value="<?php echo $b; ?>">
                            </div>

                  <center>          <button type="submit" class="btn btn-xs btn-success">Update Record</button></center>
                            <br></br>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>
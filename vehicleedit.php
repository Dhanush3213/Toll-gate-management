<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
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

             <div class="col-lg-12" style="background-image: linear-gradient(black, #014923);">
                  <h1 style="color:grey;text-align:center;">Edit Records</h1>
                      <div  class="col-lg-center"> 

                        <form role="form" method="post" action="vehicleedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle Name" name="VEHICLE_NAME" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle Type" name="VEHICLE_TYPE" value="<?php echo $a; ?>">
                            </div>
                              <div class="form-group">
                              <input class="form-control" placeholder="Vehicle ID" name="DRIVER_ID" value="<?php echo $b; ?>">

                           <br></br>
                        <center>   <button type="submit" class="btn btn-xs btn-info" >Update Record</button></center> 
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>
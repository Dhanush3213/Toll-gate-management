<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM driver
              WHERE
              DRIVER_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['DRIVER_ID'];
                $i= $row['DRIVER_NAME'];
                $a=$row['place'];
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12" style="background-image: linear-gradient(black, #014923);" >
                      <h2 style="color: white;text-align:center;">Edit Records</h2>
                      <div class="col-lg-9" >

                        <form role="form" method="post" action="driveredit1.php" >
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Driver Name" name="DRIVER_NAME" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Place" name="place" value="<?php echo $a; ?>">
                            </div> 
                           
                             
                            <button type="submit" class="btn btn-xs btn-info" >Update Record</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>
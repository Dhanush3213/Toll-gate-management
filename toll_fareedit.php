<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM toll_fare
              WHERE
              FARE_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['FARE_ID'];
                $i= $row['FARE'];
                $a= $row['START'];
                $b= $row['FINISH'];
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12"style="background-image: linear-gradient(black, #014923);">
                  <h2 style="color:grey;text-align:center;">Edit Records</h2>
                      <div class="col-lg-center">

                        <form role="form" method="post" action="toll_fareedit1.php">
                            
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
                             
                        <center>  <button type="submit" class="btn btn-xs btn-info">Update Record</button></center>  
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>
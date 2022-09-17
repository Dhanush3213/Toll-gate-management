<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header"style="background-image: linear-gradient(grey,#7216)"><h2>Add new Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(#7216,grey);">
                 

                        <form role="form" method="post" action="vehicletrans.php?action=add">
                            
                            <div class="form-group">
                            <input class="form-control" placeholder="Vehicle id" name="VEHICLE_ID">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="Vehicle Name" name="VEHICLE_NAME">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle Type" name="VEHICLE_TYPE">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Driver ID" name="DRIVER_ID">
                            </div> 
                           
                            <button type="submit"class="btn btn-xs btn-info"style="background-image: linear-gradient(lightgreen, #014923);" > <h6> Save Record </h6> </button>
                            <button type="reset"class="btn btn-xs btn-danger"style="background-image: linear-gradient(lightblue, #014923);"> <h6> Clear Entry </h6> </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>
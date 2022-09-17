  	
<?php 
 include'connection.php' ;
 include'topnav.php' ;?>

<div class="card-body">
<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Add new Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(black, #014923);">


                        <form role="form" method="post" action="toll_faretrans.php?action=add">
                        
                            <div class="form-group">
                              <input class="form-control" placeholder="Fare ID" name="FARE_ID">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Fare" name="FARE">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Start" name="START">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Finish" name="FINISH">
                            </div> 
                           <div>
                            <button type="submit" class="btn btn-xs btn-success">Save Record</button>
                            <button type="reset" class="btn btn-xs btn-danger">Clear Entry</button>
                            </div>

                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->


    </div>
    </div><?php include 'footer.php'; ?>
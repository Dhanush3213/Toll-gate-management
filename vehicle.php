<?php include 'connection.php';
include 'topnav.php'; 


?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Vehicle Records  <a href="vehicleadd.php?action=add"   style="background-image: linear-gradient(black, #014923);" type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Vehicle Name</th>
                                        <th>Vehicle Type</th>
                                        <th>Driver ID</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM vehicle';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['VEHICLE_NAME'].'</td>';
                            echo '<td>'. $row['VEHICLE_TYPE'].'</td>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="vehiclesearch.php?action=edit & id='.$row['VEHICLE_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="vehicleedit.php?action=edit & id='.$row['VEHICLE_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="vehicledel.php?type=vehicle&delete & id=' . $row['VEHICLE_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                        }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>
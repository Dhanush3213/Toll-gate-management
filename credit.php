<?php include 'connection.php';
include 'topnav.php'; 
  ?>

         <div class="col-lg-12">
                       <div>
            <i class="fas fa-table"></i>

            Credit Records  <a href="creditadd.php?action=add"  style="background-image: linear-gradient(black, #014923);" type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

                        <br> </br>       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Credit id</th>
                                        <th>Credit amount</th>
                                        <th>Top up date</th>
                                        <th>Vehicle ID</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM credit';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['CREDIT_ID'].'</td>';
                            echo '<td>'. $row['CREDIT_AMOUNT'].'</td>';
                            echo '<td>'. $row['TOP_UP_DATE'].'</td>';
                            echo '<td>'. $row['VEHICLE_ID'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="creditsearch.php?action=edit & id='.$row['CREDIT_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="creditedit.php?action=edit & id='.$row['CREDIT_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="creditdel.php?type=credit&delete & id='.$row['CREDIT_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div><?php include 'footer.php'; ?>
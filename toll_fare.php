<?php include 'connection.php';
include 'topnav.php';?>
           <div class="col-lg-12">
                                 <div> 
            <i class="fas fa-table"></i>

               Toll fare Records  <a href="toll_fareadd.php?action=add" style="background-image: linear-gradient(black, #014923);" type="button" class="btn btn-xs btn-info">Add New</a>
            </div>  <br> </br>
                                
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                                    <tr>
                                        <th>Fare</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM toll_fare';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {

                           echo '<tr>';
                           
                            echo '<td>'. $row['FARE'].'</td>';
                            echo '<td>'. $row['START'].'</td>';
                            echo '<td>'. $row['FINISH'].'</td>';
                                             
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="toll_faresearch.php?action=edit & id='.$row['FARE_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="toll_fareedit.php?action=edit & id='.$row['FARE_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="toll_faredel.php?type=toll_fare&delete & id=' . $row['FARE_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php include 'footer.php'; ?>
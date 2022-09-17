<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

           Toll Booth Records  <a href="toll_boothadd.php?action=add"   style="background-image: linear-gradient(black, #014923);" type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Location Name</th>
                                        <th>Booth ID</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM toll_booth';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['LOCATION_NAME'].'</td>';
                            echo '<td>'. $row['ROUTE_ID'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="toll_boothsearch.php?action=edit & id='.$row['LOCATION_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="toll_boothedit.php?action=edit & id='.$row['LOCATION_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="toll_boothdel.php?type=toll_booth&delete & id=' . $row['LOCATION_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>
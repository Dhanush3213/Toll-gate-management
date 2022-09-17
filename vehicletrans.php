 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$Vid= $_POST['id'];
						$Vname= $_POST['VEHICLE_NAME'];
					    $Vtype= $_POST['VEHICLE_TYPE'];
						$did= $_POST['DRIVER_ID'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO vehicle
								(VEHICLE_ID,VEHICLE_NAME, VEHICLE_TYPE, DRIVER_ID)
								VALUES ('".$Vid."','".$Vname."','".$Vtype."','".$did."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "vehicle.php";
		</script>
                    </div>
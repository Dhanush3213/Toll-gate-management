 <?php include'topnav.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                	
						$arv1= $_POST['CREDIT_ID'];
					    $dpt= $_POST['CREDIT_AMOUNT'];
						$dptd= $_POST['TOP_UP_DATE'];
						$bid= $_POST['VEHICLE_ID'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO credit
								(CREDIT_ID,CREDIT_AMOUNT, TOP_UP_DATE, VEHICLE_ID)
								VALUES ('".$arvl."','".$dpt."','".$dptd."','".$bid."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "credit.php";
		</script>
                    </div>
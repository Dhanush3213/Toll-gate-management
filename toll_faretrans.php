<?php include'header.php' ;?>
<?php include'connection.php' ;?>


 <div class="col-lg-12">
                <?php
                		$rid= $_POST['id'];
						$fr= $_POST['FARE'];
						$str= $_POST['START'];
						$fsh= $_POST['FINISH'];
					   
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO toll_fare
								(FARE_ID,FARE,START,FINISH)
								VALUES ('".$id."','".$fr."','".$str."','".$fsh."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "toll_fare.php";
		</script>
                    </div>
<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$bname = $_POST['VEHICLE_NAME'];
		    $btype = $_POST['VEHICLE_TYPE'];
			$did= $_POST['DRIVER_ID'];
			
		
	 			$query = 'UPDATE vehicle set VEHICLE_NAME ="'.$Vname.'",
					VEHICLE_TYPE ="'.$Vtype.'", DRIVER_ID="'.$did.'" WHERE
					VEHICLE_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "vehicle.php";
		</script>
 <?php include 'footer.php'; ?>
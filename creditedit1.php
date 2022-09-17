<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$arvl = $_POST['CREDIT_ID'];
		    $dpt = $_POST['CREDIT_AMOUNT'];
			$dptd = $_POST['TOP_UP_DATE'];
			$bid= $_POST['VEHICLE_ID'];
			
		
	 			$query = 'UPDATE credit set CREDIT_ID ="'.$arvl.'",
					CREDIT_AMOUNT ="'.$dpt.'",TOP_UP_DATE="'.$dptd.'", VEHICLE_ID="'.$bid.'" WHERE
					CREDIT_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "credit.php";
		</script>
 <?php include 'footer.php'; ?>
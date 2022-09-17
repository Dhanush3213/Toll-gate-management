<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$fr = $_POST['FARE'];
			$str = $_POST['START'];
		   	$fsh = $_POST['FINISH'];
			
		
	 			$query = 'UPDATE toll_fare set FARE ="'.$fr.'",START ="'.$str.'",FINISH ="'.$fsh.'"
					WHERE
					FARE_ID="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "toll_fare.php";
		</script>
 <?php include 'footer.php'; ?>
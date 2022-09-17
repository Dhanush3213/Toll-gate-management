
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'toll_fare':
					$query = 'DELETE FROM toll_fare
							WHERE
							FARE_ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " toll_fare.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>
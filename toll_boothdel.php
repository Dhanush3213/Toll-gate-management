
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'toll_booth':
					$query = 'DELETE FROM toll_booth
							WHERE
							LOCATION_ID = ' . $_GET['id'];
						 $result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "toll_booth.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>
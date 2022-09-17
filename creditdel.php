
<?php
       
       include('connection.php');
       include('topnav.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'credit':
					$query = 'DELETE FROM credit
							WHERE
							CREDIT_ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "credit.php"; 
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>
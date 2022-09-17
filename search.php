<?php 

include("config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>search</title>
</head>
<body>
<nav class="navbar navbar-inverse" style="width:auto;margin: 0.01em;">
	<div class="container-fluid" style="margin:auto; width:99%;">
    <div class="navbar-header">
            <span style="font-size:40px;float: left;font-weight: bold;"><a class="navbar-brand" href="index.php">Toll Gate Management</a></span>
          </div>
	  <ul class="nav navbar-nav ">
		<li > <a  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
		<li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
		<li><a href="about.php"><i class="fa fa-fw fa-address-book "></i> About</a></li>
		<li class="active"><a href="search.php"><i class="fa fa-fw fa-search"></i> Search</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li> <a href="register.php"><i class="fa fa-fw fa-user"></i> Signin</a></li>
		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  </ul>
	</div>
  </nav>
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-7">
                    <div class="card-header text-center">
                        <h4> Fetch Data by ID in Search box</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","db_admin");

                                    if(isset($_GET['id']))
                                    {
                                        $stud_id = $_GET['id'];

                                        $query = "SELECT * FROM table_users WHERE id='$userid' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Username</label>
                                                    <input type="text" value="<?= $row['username']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Email</label>
                                                    <input type="email" value="<?= $row['email']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">password</label>
                                                    <input type="password" value="<?= $row['password']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone No</label>
                                                    <input type="text" value="<?= $row['mobile']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<?php
  include 'footer.php';

  ?>

</body>
</html>
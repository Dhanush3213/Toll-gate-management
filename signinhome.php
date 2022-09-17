<!DOCTYPE html>
<html>
<head>
    <title>
        Toll gate management
    </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	
</head>

<body>
    
    <nav class="navbar navbar-inverse" style="margin: 0.1em;; width:auto;">
        <div class="container-fluid" style="margin:auto; width:99%;">
          <div class="navbar-header">
            <span style="font-size:40px;float: left;font-weight: bold;"><a class="navbar-brand" href="#">Toll Gate Management</a></span>
          </div>
          <ul class="nav navbar-nav ">
            <li > <a  href="index.php.html"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
            <li><a href="about.html"><i class="fa fa-fw fa-address-book "></i> About</a></li>
            <li><a href="#"><i class="fa fa-fw fa-search"></i> Search</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="register.html"><i class="fa fa-fw fa-user"></i> Signin</a></li>
            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>
    
    <table>
        <tr>
            <td>
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                    <div>
                        <label>Full Name*</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>EMP Code</label>
                        <input type="text" name="empCode" id="empCode">
                    </div>
                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </td>
            <td>
                <table class="list" id="employeeList">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>EMP Code</th>
                            <th>Salary</th>
                            <th>City</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <form action="dhanu.php" method="post">
        <table>
            <tr>
                <td><label>Enter your name</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label> phone number</label></td>
                <td><input type="phone" name="phone"></td>
            </tr>
            <tr>
                <td><label> cnic number</label></td>
                <td><input type="number" name="cnic"></td>
            </tr>
            <tr>
                <td><label> address</label></td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="save" value="submit"></td>
            </tr>
        </table>
    </form>
    <form action="dhanu.php" method="post">
        <table>
            <tr>
                <td><label>Enter vehicle id</label></td>
                <td><input type="text" name="vehicle_id"></td>
            </tr>
            <tr>
                <td><label>Enter Vehicle Type</label></td>
                <td><input type="text" name="vehcle_type"></td>
            </tr>
            <tr>
                <td><label> Enter vehicle number</label></td>
                <td><input type="number" name="vehicle_number"></td>
            </tr>
            <!--illi tanaka agide php code insert agide adre swalpa variable create madod baki ide mathe 
                xamp alli table create madod baki ide,alli yav table modlu create mabkantha nodbeku mathe swalpa html code nodbeku
            youtube nodbeku-->
            <tr>
                <td colspan="2" align="center"><input type="submit" name="saved" value="submit"></td>
            </tr>
        </table>
    </form>
    <script src="script.js"></script>

    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Toll Management System uses various technologies that allows the manual in-lane toll collection process to be automated in such a way that customers do not have to stop and pay cash at a toll booth. With TMS, an actual toll plaza is not even a requirement to collect tolls.</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="">html</a></li>
                <li><a href="">css</a></li>
                <li><a href="">PHP</a></li>
                <li><a href="">bootstrap</a></li>
                
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Contribute</a></li>
                <li><a href="">Privacy Policy</a></li>
                
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">Dhanush</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
    
</body>

</html>

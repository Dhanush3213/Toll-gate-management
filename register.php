<?php
include 'header2.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);
}
?>





 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>


<style>


.card {
  padding: 50px 0;
  background-image: linear-gradient( #01779f,#2df214);
}

.body {
  margin:20px auto;
  padding: 30px 40px;
  background-color:#010514;
  border-radius: 12px;
  width: 500px;
  box-sizing: border-box;
}

.contact-form textarea {
  resize: none;
}

.contact-form .form-input,
.form-text-area {
  background-color: #ccc;
  height: 40px;
  padding-left: 16px;
}

.contact-form .form-text-area {
  background-color: #ccc;
  height: auto;
  padding-left: 16px;
}

.contact-form .form-control::placeholder {
  color: #333;
  font-weight: 500;
  opacity: 1;
}

.contact-form .form-control:-ms-input-placeholder {
  color: #aeb4b9;
  font-weight: 500;
}

.contact-form .form-control::-ms-input-placeholder {
  color: #aeb4b9;
  font-weight: 500;
}

.contact-form .form-control:focus {
  border-color: #f33fb0;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.07), 0 0 8px #f33fb0;
}

.header {
  text-align: center;
  font-size: 24px;
  font-weight: 500;
  color:#111;
  padding-bottom:5px;
  border-bottom:1px solid white;
}

.contact-form .description {
  color: #aeb4b9;
  font-size: 14px;
  text-align: center;
}

.contact-form .submit-button-wrapper {
  text-align: center;
}

.contact-form .submit-button-wrapper input {
  border: none;
  border-radius: 4px;
  background-color: #f23292;
  color: white;
  text-transform: uppercase;
  padding: 10px 60px;
  font-weight: 500;
  letter-spacing: 2px;
}

.contact-form .submit-button-wrapper input:hover {
  background-color: #d30069;
}
label{
  color:white;
}
</style>
</head>
 
<body>
  <?php
if (isset($register)) {
  echo $register;
}
?>
 <div class="card">
  
        <div class="body">

        <div class="header">
       <h3 style="color:white;">Sign Up</h3>
        </div>

          

            <form class="contact-form" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Your name</label>
                  <input type="text" name="name"  class="form-control rounded border-white mb-3 form-input"placeholder="enter your name">
                </div>
                <div class="form-group">
                  <label for="username">Your username</label>
                  <input type="text" name="username"  class="form-control rounded border-white mb-3 form-input" placeholder="enter username">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control rounded border-white mb-3 form-input"placeholder="enter your email address">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control rounded border-white mb-3 form-input"placeholder="enter your mobile number">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control rounded border-white mb-3 form-input"placeholder="enter your password">
                  <input type="hidden" name="roleid" value="3" class="form-control rounded border-white mb-3 form-input">
                </div>
                <div class="submit-button-wrapper">
                  <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>


            </form>
        


        </div>
      
      </div>

      </body>
      </html>

  <?php
  include 'footer1.php';

  ?>
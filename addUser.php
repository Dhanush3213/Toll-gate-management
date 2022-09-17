<?php
include 'header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewUserByAdmin($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>
<style>


.card {
  padding: 50px 0;
  background-image: linear-gradient( #333,#2df214);
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

 <div class="card ">
   


 <div class="body">
            <div class="header">
          <h3 style="color:white;">Add New User</h3>
        </div>
       

            <form class="contact-form" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Your name</label>
                  <input type="text" name="name"  class="form-control rounded border-white mb-3 form-input">
                </div>
                <div class="form-group">
                  <label for="username">Your username</label>
                  <input type="text" name="username"  class="form-control rounded border-white mb-3 form-input">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control rounded border-white mb-3 form-input">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control rounded border-white mb-3 form-input">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control rounded border-white mb-3 form-input">
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="sel1">Select user Role</label>
                    <select class="form-control" name="roleid" id="roleid">
                      <option value="1">Admin</option>
                      <option value="2">Editor</option>
                      <option value="3">User only</option>

                    </select>
               
                </div>
        
</div>
<div  class="submit-button-wrapper">
                  <button type="submit" name="addUser" class="btn btn-success">Register</button>
                </div>



            </form>
          </div>


        </div>
      </div>

<?php
}else{

  header('Location:index2.php');



}
 ?>

  <?php
  include 'footer1.php';

  ?>

<?php
include 'header.php';
Session::CheckSession();

 ?>

<?php

if (isset($_GET['id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $updateUser = $users->updateUserByIdInfo($userid, $_POST);

}
if (isset($updateUser)) {
  echo $updateUser;
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
 <h3 style="margin-left:94%;"><a href="index2.php" class="btn btn-primary">Back</a></h3>
        <div class="body">

    <?php
    $getUinfo = $users->getUserInfoById($userid);
    if ($getUinfo) {






     ?>
<div class="header">
          <h3 style="color:white;">User Profile <span class="float-right">  </h3>
        </div>
<br>
          <div >

          <form class="contact-form" action="" method="POST">
              <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" name="name" value="<?php echo $getUinfo->name; ?>"  class="form-control rounded border-white mb-3 form-input">
              </div>
              <div class="form-group">
                <label for="username">Your username</label>
                <input type="text" name="username" value="<?php echo $getUinfo->username; ?>"  class="form-control rounded border-white mb-3 form-input">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" value="<?php echo $getUinfo->email; ?>"  class="form-control rounded border-white mb-3 form-input">
              </div>
              <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $getUinfo->mobile; ?>"  class="form-control rounded border-white mb-3 form-input">
              </div>


              <?php if (Session::get("roleid") == '1') { ?>

              <div class="form-group
              <?php if (Session::get("roleid") == '1' && Session::get("id") == $getUinfo->id) {
                echo "d-none";
              } ?>
              ">
                <div class="form-group">
                  <label for="sel1">Select user Role</label>
                  <select class="form-control" name="roleid" id="roleid">

                  <?php

                if($getUinfo->roleid == '1'){?>
                  <option value="1" selected='selected'>Admin</option>
                  <option value="2">Editor</option>
                  <option value="3">User only</option>
                <?php }elseif($getUinfo->roleid == '2'){?>
                  <option value="1">Admin</option>
                  <option value="2" selected='selected'>Editor</option>
                  <option value="3">User only</option>
                <?php }elseif($getUinfo->roleid == '3'){?>
                  <option value="1">Admin</option>
                  <option value="2">Editor</option>
                  <option value="3" selected='selected'>User only</option>


                <?php } ?>


                  </select>
                </div>
              </div>

          <?php }else{?>
            <input type="hidden" name="roleid" value="<?php echo $getUinfo->roleid; ?>">
          <?php } ?>

              <?php if (Session::get("id") == $getUinfo->id) {?>


              <div class="submit-button-wrapper">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="changepass.php?id=<?php echo $getUinfo->id;?>">Password change</a>
              </div>
            <?php } elseif(Session::get("roleid") == '1') {?>


              <div class="submit-button-wrapper">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="changepass.php?id=<?php echo $getUinfo->id;?>">Password change</a>
               
              </div>
            <?php } elseif(Session::get("roleid") == '2') {?>


              <div class="submit-button-wrapper">
                <button type="submit" name="update" class="btn btn-success">Update</button>

              </div>

              <?php   }else{ ?>
                  <div class="submit-button-wrapper">

                    <a class="btn btn-primary" href="index2.php">Ok</a>
                  </div>
                <?php } ?>


          </form>
        </div>

      <?php }else{

        header('Location:index2.php');
      } ?>



      </div>
    </div>


  <?php
  include 'footer1.php';

  ?>

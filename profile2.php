<?php
include 'connect.php';


?>


<?php
include 'header.php';
Session::CheckSession();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);
}

if (isset($register)) {
  echo $register;
}
?>
<div class="card ">
  <div class="card-header">
    <h3>User Profile <span class="float-right"> <a href="index2.php" class="btn btn-primary">Back</a> </h3>
  </div>
  <div class="card-body">


    <div margin:0px auto">
      <center>
        <h3>Toll booth information</h3>
      </center>
      <div style="width:600px; margin:0px auto">

        <form class="" action="insert.php" method="POST">
          <div class="form-group">
            <label for="booth_id">Booth id</label>
            <input type="text" name="booth_id" value="" class="form-control" placeholder="Enter booth id" required>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" value="" class="form-control" placeholder="Enter location">
          </div>
          <div class="form-group">
            <label for="lane_number">Lane number</label>
            <input type="text" id="lane_number" name="lane_number" value="" class="form-control" placeholder="Enter lane number" required>
          </div>





          <div class="form-group">
            <button type="submit" name="submit3" class="btn btn-success">submit</button>
          </div>



        </form>
      </div>

      <hr>
      <center>
        <h3>credit information</h3>
      </center>
      <div style="width:600px; margin:0px auto">
        <form class="" action="insert.php" method="POST">
          <div class="form-group">
            <label for="credit_id">credit id</label>
            <input type="text" name="credit_id" value="" class="form-control" placeholder="enter credit id" required>
          </div>
          <div class="form-group">
            <label for="credit_amount">credit amount</label>
            <input type="text" name="credit_amount" value="" class="form-control" placeholder="enter credit amount">
          </div>
          <div class="form-group">
            <label for="top_up_date">topup date</label>
            <input type="date" id="top_up_date" name="credit_top_up_date" value="" class="form-control" placeholder="Enter top up date">
          </div>

          <div class="form-group">
            <button type="submit" name="submit5" class="btn btn-success">submit</button>
          </div>


      </div>
    </div>
    </form>


  </div>
  <hr>
  <center>
    <h3>Vehicle information</h3>
  </center>

  <div style="width:600px; margin:0px auto">
    <form class="" action="insert.php" method="POST">
      <div class="form-group">
        <label for="vehicle_id">Vehicle id</label>
        <input type="text" name="vehicle_id" value="" class="form-control" placeholder="enter vehicle id" required>
      </div>
      <div class="form-group">
        <label for="type">vehicle type</label>
        <input type="text" name="type" value="" class="form-control" placeholder="enter vehicle type" required>
      </div>
      <div class="form-group">
        <label for="number_plate">Number plate</label>
        <input type="text" id="number_plate" name="number_plate" value="" class="form-control" placeholder="enter numberplate number" required>
      </div>

      <div class="form-group">
        <button type="submit" name="submit1" class="btn btn-success">submit</button>
      </div>







    </form>




  </div>
  <hr>
  <center>
    <h3>User Infromation</h3>
  </center>
  <div style="width:600px; margin:0px auto">

    <form class="" action="insert.php" method="POST">
      <div class="form-group">
        <label for="cnic">CNIC</label>
        <input type="text" name="cnic" value="" class="form-control" placeholder="enter cnic number" required>
      </div>
      <div class="form-group">
        <label for="fullname">Fullname</label>
        <input type="text" name="full_name" value="" class="form-control" placeholder="Enter your full name">
      </div>
      <div class="form-group">
        <label for="credit_id">credit id</label>
        <input type="text" id="credit_id" name="credit_id" value="" class="form-control" placeholder="Enter your credit id" required>
      </div>
      <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" id="Address" name="Address" value="" class="form-control" placeholder="Enter your address">
      </div>
      <div class="form-group">
        <button type="submit" name="submit2" class="btn btn-success">submit</button>
      </div>





    </form>
  </div>

  <hr>

  <center>
    <h3>Toll fare information</h3>
  </center>
  <div style="width:600px; margin:0px auto">

    <form class="" action="insert.php" method="POST">
      <div class="form-group">
        <label for="fare_id">fare id</label>
        <input type="text" name="fare_id" value="" class="form-control" placeholder="enter fare id" required>
      </div>
      <div class="form-group">
        <label for="fare_amount">fare amount</label>
        <input type="text" name="fare_amount" value="" class="form-control" placeholder="enter fare amount">
      </div>
      <div class="form-group">
        <label for="start_point">start point</label>
        <input type="text" id="start_point" name="" value="" class="form-control" placeholder="Enter start point">
      </div>


      <div class="form-group">
        <button type="submit" name="submit4" class="btn btn-success">submit</button>
      </div>




    </form>
  </div>





  |
</div>
</div>
<br>



</div>
<div style="width: 100%;">
  <?php
  include 'footer.php';

  ?>
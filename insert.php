<?php


include'connect.php';

  
if(isset($_POST['submit']))
{    
   
     $name=$_POST['name'];
     $email=$_POST['email'];
     $message=$_POST['message'];

      $sql = "INSERT INTO toll_product (name,email,message)
      VALUES ('$name','$email','$message')";
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}

  
  
if(isset($_POST['submit1']))
{    
   
     $vehicle_id=$_POST['vehicle_id'];
     $type=$_POST['type'];
     $number_plate=$_POST['number_plate'];

      $sql = "INSERT INTO vehicle (vehicle_id,type,number_plate)
      VALUES ('$vehicle_id','$type','$number_plate')";
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}


if(isset($_POST['submit2']))
{    
   
   
     $cnic= $_POST['cnic'];
     $full_name= $_POST['full_name'];
     $credit_id= $_POST['credit_id'];
     $Address= $_POST['Address'];
    

     $sql = "INSERT INTO user(cnic,full_name,credit_id,Address)
     VALUES ('$cnic','$full_name','$credit_id','$Address')";
     
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}


if(isset($_POST['submit3']))
{    
     $booth_id = $_POST['booth_id'];
     $location = $_POST['location'];
     $lane_number = $_POST['lane_number'];
   

     $sql = "INSERT INTO toll_booth (booth_id,location,lane_number)
     VALUES ('$booth_id','$location','$lane_number')";
    
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}


if(isset($_POST['submit4']))
{    
   
   
     $fare_id= $_POST['fare_id'];
     $fare_amount= $_POST['fare_amount'];
     $start_point= $_POST['start_point'];
     
    

     $sql = "INSERT INTO toll_fare(fare_id,fare_amount,start_point)
     VALUES ('$fare_id','$fare_amount','$start_point')";
     
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}


if(isset($_POST['submit5']))
{    
   
   
     $credit_id= $_POST['credit_id'];
     $credit_amount= $_POST['credit_amount'];
     $credit_top_up_date= $_POST['credit_top_up_date'];
     
    

     $sql = "INSERT INTO credit(credit_id,credit_amount,credit_top_up_date)
     VALUES ('$credit_id','$credit_amount','$credit_top_up_date')";
     
     if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}


?>
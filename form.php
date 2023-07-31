<?php
require 'database/dbconnect.php';

// $done=false;
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']!=true){

    header('location: login.php');
    exit;
}








// data entry in db
// if($_SERVER["REQUEST_METHOD"]=="post"){
  // $name=$_POST["name"];
  // $age=$_POST["age"];
  // $contact=$_POST["contact"];
  // $aadhar=$_POST["aadhar"];
  // $city=$_POST["city"];
  // $pincode=$_POST["pincode"];
  // $email=$_POST["email"];
  // $gender=$_POST["gender"];
  // $bloodgroup=$_POST["bloodgroup"];

// $sql="INSERT INTO `ragistration` (`name`) VALUES ( '$name')";

  


// $result=mysqli_query($con,$sql);
// if($result){
//   echo "success";
// }
// else{
//   echo "error";
// }


// 2nd


if($_SERVER["REQUEST_METHOD"]=="POST"){

  $name=$_POST["name"];
  $age=$_POST["age"];

  $contact=$_POST["contact"];
  $aadhar=$_POST["aadhar"];
  $city=$_POST["city"];
 
  
  // $pincode=$_POST["pincode"];
  $email=$_POST["email"];
  $gender=$_POST['gender'];
  
  $date = $_POST['date'];
  $time = $_POST['time'];


  // echo $date;
  // $bloodgroup=$_POST["bloodgroup"];

  // $sql = "INSERT INTO `ragistration` (`sn`, `name`, `age`, `contact`, `aadhar` ,`city`,'center', `email`, `gender`,   `status`) VALUES (NULL, '$name', '$age', '$contact', '$aadhar', $city',  '$center', '$email', '$gender', 'Approved');";

  // $sql = "INSERT INTO `ragistration` (`sn`, `name`, `age`, `contact`, `aadhar`, `city` ,`email`, `gender`, `status`) VALUES (NULL, '$name', '$age', '$contact', '$aadhar', $city',   '$email', '$gender', 'Approved');";
// $sql = "INSERT INTO `ragistration` (`sn`, `name`, `age`, `contact`, `aadhar`, `city`, `email`, `gender`, 'date', `status`) VALUES (NULL, '$name', '$age', '$contact', '$aadhar', '$city','$email', '$gender', '$date', '0');";

// $sql = "INSERT INTO `ragistration` (`sn`, `name`, `age`, `contact`, `aadhar`, `city`, `email`, `gender`, `date`, `status`) VALUES (NULL, 'yash', '12', '1212', '1212121', 'upleta', 'yash.murani0@gmail.com', 'male', '2022-03-01', '0')";


$sql = "INSERT INTO `ragistration` (`sn`, `name`, `age`, `contact`, `aadhar`, `city`, `email`, `gender`, `date`, `timeslot`, `status`) VALUES (NULL, '$name', '$age', '$contact', '$aadhar', '$city', '$email', '$gender', '$date', '$time', '0')";

  $result=mysqli_query($con,$sql);

$done=true;
  if($result){
      header('location: success.php');
      // echo "done";
  }

  else{
      echo "cant".mysqli_error($con);
  }


}



?>


<?php
$to      = $email;
$subject = 'Vaccine Registration';
$message = 'Hello Sir/Mem Your Vaccine Slot Registration Is completed. Your VAccine Center is' . $center . 'Thanks For Registration For More information about center location visit our center page on home screen';
$headers = 'From: vaccineregistration@yashmurani.online';

mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>New Member Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- <style> -->
      <link rel="stylesheet" href="css/form.css">
  </head>
  <body>



    <div class="testbox">
 

      <form action="form.php" method="post">
        <div class="banner">
          <!-- <img src="yaa.jpg" height="100%" width="100%"> -->
          <h1>Corona Vaccine Slot Ragistration</h1>
        </div>

       
        <div class="colums">
          <div class="item">
            <label for="fname"> Full Name<span>*</span></label>
            <input id="name" type="text" name="name"  required/>
          </div>
           <div class="item">
            <label for="lname"> Age<span>*</span></label>
            <input id="age" type="number" name="age" required/>
          </div>
          <div class="item">
            <label for="address1">Contact Number<span>*</span></label>
            <input id="contact" type="number"  type="required"  name="contact" required/>
          </div>
          <div class="item">
            <label for="address2">Aadhar Number<span>*</span></label>
            <input id="adhar" type="number"   name="aadhar" required/>
          </div>
             
         


          <!-- <div class="item">
            <label for="zip">Zip/Postal Code<span>*</span></label>
            <input id="pincode" type="number" name="pincode" required/>
          </div> -->
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="email" type="email"   name="email" required/>
          </div>
          <div class="item">
            <label for="phone">Gender<span>*</span></label>
            <input id="gender" type="text"  placeholder="Male/Female" name="gender" required/>
          </div>


        </div>


        
        <div class="item">
            <!-- <label for="state">City<span>*</span></label>
            <input id="city" type="text"   name="city" required/> -->

            <label for="city"> Select City & Center</label>
            <!-- <label for="cars">Choose a car:</label> -->
<select name="city" id="city" required>
  <optgroup label="Upleta">
    <option value="upleta : Govtschool">Upleta : Govt School</option>
    <option value="upleta : GovtHospital">Upleta : Govt Hospital</option>
  </optgroup>
  <optgroup label="Junagadh">
    <option value="Junagadh : Govt. Hospital">Junagadh : Govt.Hospital</option>
    <option value="Junagadh : Govt.School">Junagadh : Govt.School</option>
  </optgroup>

  <optgroup label="Dhoraji">
    <option value="Dhoraji : Govt. Hospital">Dhoraji : Govt.Hospital</option>
    <option value="Dhoraji : Govt.School">Dhoraji : Govt.School</option>
  </optgroup>

</select>

          </div>


          <div class="item">
            <!-- <label for="state">City<span>*</span></label>
            <input id="city" type="text"   name="city" required/> -->

            <label for="city"> Select Time Slot</label>
            <!-- <label for="cars">Choose a car:</label> -->
<select name="time" id="time" required>
  <optgroup label="Select Time Slot">
    <option value="11pm : 01pm"> 11pm : 01pm</option>
    <option value="01pm : 03pm">01pm : 03pm</option>
    
    <option value="03pm : 05pm">03pm : 05pm</option>
  </optgroup>

</select>

          </div>




       <div>

        <label for="date">Select Date:</label>
<input type="date" id="date" name="date">
</div>


          <button type="submit" href="success.php">Submit</button>
          <!-- <button type="" href="logout.php">Log out</button> -->
        </div>
      </form>
    

    </div>
  </body>
</html>
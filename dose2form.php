<?php
require 'database/dbconnect.php';



if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST["name"];
    $age=$_POST["age"];
  
    $contact=$_POST["contact"];
    $aadhar=$_POST["aadhar"];
    $city=$_POST["city"];
   $date = $_POST["date"];
    
  
    $email=$_POST["email"];
    $gender=$_POST['gender'];

    $sql = "INSERT INTO `ragistration_2` (`sn`, `name`, `age`, `contact`, `aadhar`, `city`, `email`, `gender`, `status`) VALUES (NULL, '$name', '$age', '$contact', '$aadhar', '$city','$email', '$gender', 'Approved');";
    $result=mysqli_query($con,$sql);

    if($result){
        header('location: success.php');
        // echo "done";
    }
  
    else{
        echo "cant".mysqli_error($con);
    }
  

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Apply For Dose 2</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- <style> -->
      <link rel="stylesheet" href="css/form.css">
  </head>
  <body>



    <div class="testbox">
 

      <form action="dose2form.php" method="post">
        <div class="banner">
          <!-- <img src="yaa.jpg" height="100%" width="100%"> -->
          <h1>Dose 2 Registration</h1>
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
<div class="item"> 





</div> 



        </div>
          <button type="submit" href="success.php">Submit</button>
          <!-- <button type="" href="logout.php">Log out</button> -->
        </div>
      </form>
    

    </div>
  </body>
</html>
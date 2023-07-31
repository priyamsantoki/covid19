
          <?php 

require 'database/dbconnect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email=$_POST["email"];
    $aadhar=$_POST["aadhar"];




          $sql = "SELECT * FROM `vaccine` WHERE aadhar = $aadhar";
          $result = mysqli_query($con, $sql);

        //   $num = mysqli_num_rows($result);
          echo $num;

          while($row = mysqli_fetch_assoc($result)){
                $passwordfatch =  $row['password'];


          }}
echo $passwordfatch;
         
 $to    = $email;
$subject = 'Recover Password';
$message = 'Hello Sir/Mem Your Vaccine Account Password is'. $passwordfatch;
$headers = 'From: vaccineregistration@yashmurani.online';

mail($to, $subject, $message, $headers);      

            
        ?>






<!DOCTYPE html>
<html>
  <head>
    <title>Recover Password</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- <style> -->
      <link rel="stylesheet" href="css/form.css">
  </head>




<body>
    <div class="testbox">
      <form action="recoverpassword.php" method="post">
        <div class="banner">
          <!-- <img src="yaa.jpg" height="100%" width="100%"> -->
          <h1>Recover Your Password</h1>
        </div>
        <div class="colums">
          <div class="item">
            <label for="email">Email<span>*</span></label>
            <input id="email" type="email" name="email"  required/>
          </div>
          <div class="item">
            <label for="aaadhar"> Aadharcard Number <span>*</span></label>
            <input id="aadhar" type="number" name="aadhar" required/>

            <!-- <a href="recoverpassword.php" target= "blank">Recover Password</a> -->
            <!-- <button type="submit" href="passreco.php">Submit</button> -->
            <button type="submit" href="passrecoversuccess.html">Recover Password</button>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>

            
            
          
         
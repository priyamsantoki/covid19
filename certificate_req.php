

<?php

require 'database/dbconnect.php';


if($_SERVER["REQUEST_METHOD"]=="POST"){

 
  $aadhar=$_POST["aadhar"];
  $sql = "SELECT * FROM `ragistration` WHERE aadhar = $aadhar";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  // echo $num;


  while($row = mysqli_fetch_assoc($result)){
 $status =  $row['status'];
 $name = $row['name'];
 $age = $row['age'];
 $aadhar = $row['aadhar'];
 $contact = $row['contact'];
 $email = $row['email'];
 $gender = $row['gender'];
  }

  if($status == 1){


    $certificate = true;
// $city = $row['city'];
// echo $name;
// $to      = $email;
// $subject = 'Vaccine Registration Certificate';
// $message = 'Hello ' .$name. ' Your Vaccine Certificate';
// $headers = 'From: vaccineregistration@yashmurani.online';

// mail($to, $subject, $message, $headers);


}




  else{
 $status = false;
  }



}


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Certificate Request</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- <style> -->
      <link rel="stylesheet" href="css/form.css">
  </head>

<script>
  <?php
if($status==false){
echo "alert('Take Vaccine First To Get Vaccine Certificate')";
}
?>
</script>

<body>
    <div class="testbox">
      <form action="certificate_req.php" method="post">
        <div class="banner">
          <!-- <img src="yaa.jpg" height="100%" width="100%"> -->
          <h1>Certificate Request</h1>
        </div>
        <div class="colums">
          <div class="item">
            <label for="email">Enter Your Adhar Number<span>*</span></label>
            <input id="aaadhar" type="number" name="aadhar"  required/>
          </div>





        




            <button type="submit" href="">Click Hear</button>






            
        </div>
        </div>
      </form>
    </div>


 



    <style>
        .header{
            /* background-color: rgb(140, 187, 206); */
            justify-content: center;
            text-align: center;
            color: whitesmoke;
            
            /* height: 50px; */
            
        }


        .information{
            /* border: 2px solid green; */
            justify-content: center;
            /* text-align: center; */
            padding-left: 22%;
            size: 100px;
            padding-top: 5%;
        }


        .left{
            padding-left: 22%;
                display: inline-block;
                /* border: 2px solid rebeccapurple; */
        }

        .right{
            display: inline-block;
            /* border: 2px solid green; */
            padding-left: 8%;
            /* padding-top: px; */
        }

        .h2{
    color: blue;
}
    </style>


    <div class="header">
        <img src="header.jpeg" alt="">
    </div>



<div class="information">

<u><h2>Information</h2></u>
<br>

Name:  <?php echo $name; ?><br><br>
Age: <?php echo $age; ?><br><br>
Contact: <?php echo $contact; ?><br><br>
Email: <?php echo $email; ?><br><br>
Gender: <?php echo $gender; ?><br><br>
<!-- Date: <br><br> -->
</div> ; 



<!-- <div class="left"> -->

    <img src="images/endd.png" alt="">

<!-- </div> -->

<!-- <div class="right">
    <img src="qr.png" alt="">
</div>'; -->

      
   

  </body>
</html>
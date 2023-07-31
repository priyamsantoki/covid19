
<script>
<?php

require 'database/dbconnect.php';



if($_SERVER["REQUEST_METHOD"]=="POST"){

 
    $aadhar=$_POST["aadhar"];
    $sql = "SELECT * FROM `ragistration` WHERE aadhar = $aadhar";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    // echo $num;


    if($num==1){
        header("location:dose2form.php");
        $dose2=true;
    }
    else{
      
        echo "alert('First You Must Apply For Dose 1!!!')";
       
    }


}

?>
</script>

<!DOCTYPE html>
<html>
  <head>
    <title>Dose 2 Validation</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- <style> -->
      <link rel="stylesheet" href="css/form.css">
  </head>




<body>
    <div class="testbox">
      <form action="dose2validation.php" method="post">
        <div class="banner">
          <!-- <img src="yaa.jpg" height="100%" width="100%"> -->
          <h1>Dose 2 Validation</h1>
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
  </body>
</html>
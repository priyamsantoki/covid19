<?php
$servername="localhost";
$username="root";
$password="";
$database="vaccine";

$con= mysqli_connect($servername, $username, $password, $database);

if($con){
    // echo "database connected successfully";
}

if(!$con){
    echo "database not connected";
}

$sql = "Select * from ragistration";
$sql2 = "Select * from ragistration_2";
$result=mysqli_query($con, $sql);
$result2=mysqli_query($con, $sql);

$num=mysqli_num_rows($result);
$num2=mysqli_num_rows($result2);
// echo $num;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="vaccinenumber.css">
</head>
<body>
   <div class="numbers">
<?php
echo $num. " Peoples Are Vaccinated";
?>



<?php
echo "<br>";
echo "<hr>";
echo $num2. " Peoples Are Fully Vaccinated";
?>


   </div>


   
</body>
</html>
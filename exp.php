<?php
/*
$conn = new mysqli("localhost","root","", "sample") or die("unable to connect");
if($conn)

if ($conn->conn_error) {
    echo "failed" . $conn->conn_error;
    exit();
}

echo "success";


$sql = "SELECT * FROM usr_reg";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['fname'];
    }
}
*/

if(!isset($_POST['submit']))
{
    $fn=$_POST['fn'];
    //$mid=$_POST['mid'];
    //$cno=$_POST['cno'];
    $con = new mysqli("localhost","root","", "sample");

    $sql="INSERT INTO plantonia(plant_name) VALUES ('$fn')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<h1>Thankyou for responding</h1>";
    }
    else{
        echo"Something went wrong, please try again!";
    }
}
   
?>

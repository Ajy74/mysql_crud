<?php


if($_SERVER['REQUEST_METHOD'] = 'post'){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    echo "success ". $name . " ".$gender ;
}

//submit these to database//




/* ways to connect to a MySQL database
    1. MySQLi extension
    2.PDO
*/

 //connecting to the database//
 $server ="localhost";
 $username ="root";
 $password ="";

 //create a connection//
 $con = mysqli_connect($server,$username,$password);

 
 //Die if connection was not succesfull//
if(!$con)
{
    die("connection to this detabase failed due to: " . mysqli_connect_error());
}

//create a DB//
$sql = "CREATE DATABASE form2";
$result = mysqli_query($con,$sql);
//check for the database creation success//
if($result){
    echo "The db was created successfully.<br>";
}
else{
    echo "the db was not created due to -->". mysqli_error($con);
}


?>




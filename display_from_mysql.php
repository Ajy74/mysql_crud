<?php

    //connecting to the database//
 $server ="localhost";
 $username ="root";
 $password ="";
 $database ="ajaydb";

 //create a connection//
 $con = mysqli_connect($server,$username,$password,$database);

 
 //Die if connection was not succesfull//
if(!$con)
{
    die("connection to this detabase failed due to: " . mysqli_connect_error());
}
else{
    echo "connection success<br>";
}

$sql ="SELECT * FROM `data` ";
//$sql ="SELECT * FROM `data` LIMIT 3 ";   //it shows only 3 from top//
$result = mysqli_query($con,$sql);


//find the number of records returned//
$num = mysqli_num_rows($result);
echo $num . " records found";
echo "<br>";

//display

if($num>0)
{
    while($row = mysqli_fetch_assoc($result)){

//        echo var_dump($result);
        echo $row['s.no']." ". $row['name'].$row['age'].$row['gender'];
        echo "<br>";

    }
}

?>
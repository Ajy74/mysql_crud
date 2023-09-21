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


//create table//

$sql = "CREATE TABLE `ajaydb`.`data` ( `s.no` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(12) NOT NULL ,`age` INT(3) NOT NULL , `gender` VARCHAR(6) NOT NULL ,
 PRIMARY KEY (`s.no`))";



?>
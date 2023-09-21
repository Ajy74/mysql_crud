<?php


$server="localhost";
$username="root";
$password="";
$database="ajaydb";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con)
{
    die("connection to this detabase failed due to: " . mysqli_connect_error());
}
else{
    echo "Connection Success <br>";
}



/*uses of WHERE Clause to delete data*/

$sql = "DELETE FROM `data`  WHERE `age` = 22 LIMIT 2"; //limit decide affected rows//
$result = mysqli_query($con,$sql);
echo var_dump($result)."<br>";   //it doesn't show hom many number of rows updated/affected //
$aff = mysqli_affected_rows($con); //it gives hom many number of rows updated/affected //
echo "Number of affected rows: $aff<br>";
if($result){
    echo "records deleted successfully👍";
}
else{
    $err = mysqli_error($con);
    echo "records are not deleted😔 due to this error---> $err";
}

?>
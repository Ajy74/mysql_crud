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


/*uses of where Clause to fetch data from the database*/

$sql = "SELECT * FROM `data`";  //this find all records //
//$sql = "SELECT * FROM `data` where `age`=21 ";  //this get records which mentioned here to find//
$result =mysqli_query($con,$sql);


//find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";

$no =1;
if($num>0)
{
    while($row = mysqli_fetch_assoc($result)){

      //  echo $row['s.no']." ". $row['name']." ".$row['age']." ".$row['gender'];
        echo $no." ". $row['name']." ".$row['age']." ".$row['gender'];
        echo "<br>";
        $no++;

    }
}

/*uses of WHERE Clause to update data*/

$sql = "UPDATE `data` SET `name` = 'employeee' WHERE `age` = 22";
$result = mysqli_query($con,$sql);
echo var_dump($result)."<br>";   //it doesn't show hom many number of rows updated/affected //
$aff = mysqli_affected_rows($con); //it gives hom many number of rows updated/affected //
echo "Number of affected rows: $aff<br>";
if($result){
    echo "records updated successfully👍";
}
else{
    echo "records are not updated😔";
}

?>
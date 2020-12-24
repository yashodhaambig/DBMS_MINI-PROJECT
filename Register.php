<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="reg";

//create connection
$conn =new mysqli($servername,$username,$pass,$dbname);
//check connection
if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);

}
$NAME=$_POST['name'];
$EMAIL=$_POST['email'];
$PHONENO=$_POST['phno'];
$PASSWORD=$_POST['password'];
$ADDRESS=$_POST['address'];
$CITY=$_POST['city'];


$sql="INSERT INTO reg  VALUES('$NAME','$EMAIL',$PHONENO,'$ADDRESS','$CITY')";
if($conn->query($sql)==TRUE){
    echo "New record successfully";

}
else{
    echo "Error:".$sql ."<br>" .$conn->error;
}

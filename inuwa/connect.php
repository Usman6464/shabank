<?php
$conn = mysqli_connect("localhost","root","","my_db");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$idno = $_POST['idno'];
$depertment = $_POST['depertment'];
$state = $_POST['state'];
$lga = $_POST['lga'];
$number = $_POST['number'];

$sql = "INSERT INTO registration(fname,lname,idno,depertment,state,lga,number)VALUES('$fname','$lname','$idno','$depertment','$state','$lga','$number')";
$result = mysqli_query($conn,$sql);

if($result > 0){
    echo "Successfull Inserted";
}else{
    echo "Failed to Insert!";
}
?>
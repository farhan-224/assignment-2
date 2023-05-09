<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];
$link= mysqli_connect("localhost","root","","contact");
if($link===false){
die("Could not connect".mysqli_connect_error());}
$sql = "INSERT INTO contact(name,email,phone,message) VALUES ('$name','$email','$phone','$massage')";
    if (mysqli_query($link, $sql)) {
        echo "Success";
    } else {
        echo "Error".mysqli_error($link);
    } 
mysqli_close($link);
?>
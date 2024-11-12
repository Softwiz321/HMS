<?php
$conn= new mysqli("localhost","root","mysql","contact",3307);
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$data="INSERT INTO `info` (`name`, `email`, `subject`,`phone`,`message`) VALUES ('$name', '$email', '$subject','$phone','$message')";
if ($conn->query($data)==true) {
       echo "MESSAGE SENDED!!";
}
else {
       echo "Retry Again!!";
}
?>
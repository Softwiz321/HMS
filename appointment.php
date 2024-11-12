<?php
$conn= new mysqli("localhost","root","mysql","contact",3307);

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $department=$_POST['department'];
  $doctor=$_POST['doctor'];
  $message=$_POST['message'];

  $data="INSERT INTO `list` (`name`, `email`, `number`,`date`,`time`,`department`,`doctor`,`message`) VALUES ('$name', '$email','$number','$date','$time','$department','$doctor','$message')";
  if ($conn->query($data)==true) 
  {
     header("Location: confimation.php"); // Redirects to "anotherPage.php" 
     exit();
  }
  else 
  {
  }
}  
?>
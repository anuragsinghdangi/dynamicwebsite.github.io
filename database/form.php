<?php
session_start();

$con = mysqli_connect("localhost","root","","dynamic_website");
if(isset($_POST['save_btn']))
{
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $coment = $_POST['comm'];

     $query = "INSERT INTO `dynamic_website_from`( `name`, `email`, `mobile`, `comment`) VALUES ('$name','$email','$mobile','$coment')";
     $query_run = mysqli_query($con,$query);

     if($query_run){
           $_SESSION['status'] = "YOUR DATA SUCCESSFULLY SEND .";
           header('Location:../index.php');
     }

}
?>
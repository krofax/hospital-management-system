<?php
session_start();
error_reporting(1);

if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("hospital");

if($_SESSION['admin']=="")
{
header('index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/connect.css">
</head>
<body>
  <!--start-header-->
  <div class="header">
    <div class="wrap">
    <!--start-logo-->
    <div class="logo">
      <a href="#"><img src="images/renew.png" title="logo" /></a>
    </div>
    <!--end-logo-->
    <!--start-top-nav-->
    <div class="top-nav">
      <ul>
        <li class="active"><a href="home.php">Home <span class="fa fa-home"></span></a></li>
          <li><a href="dlist.php">Doctors <span class="fa fa-stethoscope"></span></a></li>
          <li><a href="plist.php">Patients <span class="fa fa-users"></span></a></li>
          <li><a href="alist.php">Appointment <span class="fa fa-book"></span></a></li>
          <li><a href="logout.php" class="link">Logout <span class="fa fa-sign-out"></span></a></li>
      </ul>
    </div>
    <div class="clear"> </div>
    <!--end-top-nav-->
  </div>
  <!--end-header-->
</div>
</body>

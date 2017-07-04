<?php require('connection.php');?>
<html>
 <head>
  <title>Recover Doctor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/bootstrap.css"/>
 <link rel="stylesheet" href="/css/icofont.css">
 <link rel="stylesheet" href="/css/body.css">
 <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="css/responsiveslides.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
<table class="table table-bordered">
<tr bgcolor=#808080><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=#1e90f><td ><font size=4 color=white>Recover
Patient</font></td></tr>
<?php

$rno=$_GET["rno"];


 mysql_query("update Patient set pshow='Y' where pno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>Records Successfully Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";

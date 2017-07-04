<html>
 <head>
  <title>Save Doctor</title>
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
<tr bgcolor=#1e90f><td ><font size=4 color=white>Save
Doctor</font></td></tr>

<?php
require('connection.php');
error_reporting(1);
$name=trim($_POST["name"]);
$spec=trim($_POST["spec"]);
$error=0;
if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Name
can't empty</font></td></tr>"; }
if ($spec=="") { $error=1; echo "<tr><td><font color=red
size=4>Specilization can't empty</font></td></tr>"; }
if ($error==0) {

 mysql_query("insert into doct(dname,dspec,dshow)
values('".$name."','".$spec."','Y')");
 echo "<tr><td align=center><font size=4 color=green>
Records Successfully Inserted</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=dsave.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Specilization</td><td><input type=text name=spec
size=30 maxlength=30 value='".$spec."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=dlist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";

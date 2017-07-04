<?php require('connection.php');?>
<html>
 <head>
  <title>Add New Doctor</title>
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
<tr bgcolor=#80808><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=#1e90ff><td ><font size=4 color=white>New
Doctor</font></td></tr>
<form name=fdadd method=post action=dsave.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Doctor Name</td><td><input type=text name=name size=30
maxlength=30></td></tr>
<tr><td>Specilization</td><td><input type=text name=spec size=30
maxlength=30></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>

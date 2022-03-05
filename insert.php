<?php 
$user='root'; 
$pwd=''; 
$db='Register'; 
$con=mysql_connect("localhost","$user","$pwd");  
if(!$db) { die("Unable to connect"); 
} 
else 
{ 
echo "connected <br>"; 
} 
mysql_select_db("$db",$con) or die("Could not open db".mysql_error()); 
$sno = $_POST['sno']; 
$name = $_POST['name']; 
$uname = $_POST['uname']; 
$pwd = $_POST['pwd']; 
 
$sql = "INSERT INTO rg(sno, name, uname, pwd) VALUES('$sno', '$name','$uname','$pwd')"; 
 
if(mysql_query($sql)) 
{ 
echo "Registerd Successfully"; 
} else 
{ 
echo mysql_error($con); 
} 
?> 

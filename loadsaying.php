<?php

$username="root";
$password="";
$database="paleo";


mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$result = mysql_query("SELECT * FROM nsfw")
or die(mysql_error());  

//$_SESSION['test']="session is working";
//echo $_SESSION['test'];


$randomnumber = rand(1,3);
$option1 = mysql_data_seek($result, $randomnumber-1) or die(mysql_error());
//echo $option1;
if ($option1){
$randomrow = mysql_fetch_array($result);
}
print '<h1>'.$randomrow['saying']."</h1><br>";


?>
<?php
if($_GET["regname"] && $_GET["regpass1"] && $_GET["regpass2"] )
{
if($_GET["regpass1"]==$_GET["regpass2"])
{
$servername="localhost";
$username="cloudjdv";
$password="f0ssl1nk";
$pass = sha1($_GET['regpass1']);
$conn= mysql_connect($servername,$username,$password)or die(mysql_error());
mysql_select_db("jdvcloud",$conn);
$sql="insert into oc_users
(uid,displayname,password)values('$_GET[regname]','$_GET[regemail]','$pass')";
$result=mysql_query($sql,$conn) or die(mysql_error());
}
else print "passwords doesnt match";
}
else print"invaild data";
header("Location:http://jdvcloud.com/");
exit;
?>

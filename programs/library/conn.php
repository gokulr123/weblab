<?php
$servername='localhost';
$username='root';
$password='';
$dbname='library';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('Could not connect MySQL:' .mysql_error());
}
else
{
echo "Database Connected";
}
?>
<html>
<body bgcolor="Yellow">
<form action="mainlib.html"method="post">
<center>
<br>
<br>
<?php
include_once'conn.php';
if(isset($_POST['Submit']))
{
$fname=$_POST['id'];
$pass=$_POST['bname'];
$gen=$_POST['auname'];
$em=$_POST['pub'];
$number=$_POST['quantity'];
 $sql="INSERT INTO books(ID,b9:52 AM 2/17/2021name,auname,pub,quantity) VALUES('$fname','$pass','$gen','$em','$number')";
if(mysqli_query($conn,$sql))
{
echo "New record created successfully !<br>";
}
else
{
echo"Error:" .$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit"value="back to home page"name="submit">
</center>
</body>
</html>
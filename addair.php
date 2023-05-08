<?php
$id=$_POST['id'];
$name=$_POST['name'];
$depfrom=$_POST['depfrom'];
$deptime=$_POST['deptime'];
$airtime=$_POST['aritime'];
$airplace=$_POST['ariplace'];
$con=new mysqli("localhost","fisat","fisat","fisatdb");
if($con==false)
{
echo "Failed to connect";
}
else
{
echo "connected";
}
$sql="INSERT INTO airline VALUES($id,'$name','$depfrom',$deptime,$airtime,'$airplace')";
if($con->query($sql))
{
echo "<br>";

echo 'New row added';
}
else
{
echo "ERROR:could not execute query";
}
$con->close();
?>

<?php

$depfrom=$_POST['txt'];
$ariplace=$_POST['txt1'];
$con=new mysqli("localhost","fisat","fisat","fisatdb");
if($con==false)
{
echo "Failed to connect";
}
else
{
echo "connected\n";
}
$sql="select * from airline where depfrom='$depfrom' and airplace='$ariplace' ";
if($result=$con->query($sql))
{
if (($result->num_rows)>0)
{
echo "<h2>AIRLINE INFO.</h2>";
echo "<table border='1'>";
echo "<tr>";
echo "<th width='100'>AIR_ID</th>";
echo "<th width='100'>AIR_NAME</th>";
echo "<th width='100'>DEPARTURE FROM</th>";
echo "<th width='100'>DEPARTURE TIME</th>";
echo "<th width='100'>AIR TIME</th>";
echo "<th width='100'>AIR PLACE</th>";
echo "</tr>";
while($row = $result->fetch_array())
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
}
echo "</table>";
$result->close();
}
else
{
echo "\nCould not found the airline";
}
}

else
{
echo "\nError:could not connect";
}
$con->close();
?>

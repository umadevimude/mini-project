<?php
$connection=mysqli_connect("localhost","root","","artgallery");
if($connection)
{
echo "connection";
}
else
{
echo "error";
}
$FullName=$_POST['Name'];
$email=$_POST['email'];
$number=$_POST['phonenum'];
$gender=$_POST['gender'];
$housenum=$_POST['hnum'];
$street=$_POST['street'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
/*$query="CREATE TABLE gallery(FULLNAME CHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL,PHONENUM INT(10),GENDER CHAR(15) NOT NULL,HOUSENUMBER VARCHAR(10), STREET VARCHAR(30),CITY VARCHAR(30),PINCODE INT(6));";
if(mysqli_query($connection,$query))
{
echo "table created"."<br>";
}
else{
echo "error:".mysqli_error($connection);
}*/
echo "con";
$query1="INSERT INTO gallery VALUES('$FullName','$email','$number','$gender','$housenum','$street','$city','$pincode');";
echo "con";
if(mysqli_query($connection,$query1))
{
	echo "record inserted";
}
else
{
	echo "not inserted";
}
/*$query="select * from registration;";
$check=mysqli query($connection,$query);
if(mysqli_num_rows($check))
{
	while($row=mysqli_fetch_assoc($check))
	{
		echo "";
	}
}
else{
	echo "";
}*/
echo "<a href=load.html>NEXT</a>";
?>


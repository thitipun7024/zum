<?php
$host = "localhost";
$username = "root";
$userpassword = "root";
$dbname = "stock";
  
$conn = mysqli_connect($host ,$username ,$userpassword ,$dbname);

if (mysqli_connect_errno())
{
	echo "Database Connect Failed : " . mysqli_connect_error();
}
else
{
	echo "Database Connected.";
}

mysqli_close($conn);
?>
<?php 

$rr = md5(utf8_encode('hello'));
echo $rr;
echo base64_encode('123');

$rr1 = md5(utf8_decode('5d41402abc4b2a76b9719d911017c592'));
echo '<br/>' .$rr1;
?>



<html>
	<head>
		<title> Sync Data From MYSQl</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body>
		<h1>PHP</h1>
		<?php
//require('connection.php');

?>

<?php
$conn=mysqli_connect("localhost","root","","db_sampleproject");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM tb_users");

echo "<table border='1'>
<tr>
<th>User ID</th>
<th>User Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

	
	</body>
	


</html>
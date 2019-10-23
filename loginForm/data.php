<?php
$con=mysqli_connect("localhost","root","","rest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM tb_rest;";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s - %s)\n",$row[0],$row[1], $row[2]);
	echo "<h3> </h3>";
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
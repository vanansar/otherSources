<?php
require('../connection.php');
//$id = $_POST['id'];
$tools = $_POST['tool'];
$lang = $_POST['toolType'];
$conn = new mysqli("localhost", "root", "", "rest");

if($conn->connect_error)
{
    //echo 'success';
   die($conn->connect_error);
}
echo
$sql = "INSERT INTO tb_rest( tools, lang) VALUES('$tools', '$lang')";


if($conn->query($sql)==TRUE)
{
    echo "Inserted Data";

}
else{
    echo " Failed!";
}

//echo base64_decode(c2FyYXZhbmFu);


$conn->close();
?>
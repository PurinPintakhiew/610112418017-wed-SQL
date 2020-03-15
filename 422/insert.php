<?php
require 'connect.php';
    $id = $_POST['txt_id'];
    $name = $_POST['txt_name'];
    $Type = $_POST['TypeN'];
    $Price = $_POST['num_P'];

    $insertto = "INSERT INTO menu VALUES ('$id','$name','$Type',$Price) ";
    $result = mysqli_query($con, $insertto);
if ($result)
{
    echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'InsertFrom.php'; ";
	echo "</script>";
}
else
{
    echo 'เพิ่มข้อมูลไม่สำเร็จ';
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>หน้าลบข้อมูล</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/table.css">

</head>

<body>
		<a href="index.php">Home</a> |
        <a href="search.php">ค้นหาข้อมูล</a> |
        <a href="InsertFrom.php">เพิ่มข้อมูล</a> |
        <a href="update.php">แก้ไขข้อมูล</a> |
        <a href="delete.php">ลบข้อมูล</a> 
    <hr>
    <form action="" method="post">
        รหัส/ชื่อเมนูอาหาร:
        <input type="text" name="txt_id" required>
        <input type="submit" value="ค้นหา"> <br>
</form>
<hr>
<table>
<?php
        require 'connect.php';
        if (isset($_POST['txt_id'])) 
        {
            $id = $_POST['txt_id'];
            $search = "SELECT * FROM menu WHERE menu_ID = '$id' ";
            $result = mysqli_query($con, $search);
            $row = mysqli_fetch_array($result);
        }
?>
    <form method="post" action="">
                 <tr>
                 <td> รหัสเมนู: </td>
                    <td>
                        <input type="text" name="txt_id" value="<?php echo $row['menu_ID'];?>"  readonly>
                    </td>
                 </tr>
                <tr>
                <td> ชื่อรายการอาหาร: </td>
                    <td>
                        <input type="text" name="txt_name" title = "ชื่อขึ้นต้นด้วยตัวพิมพ์ใหญ่ตามด้วยตัวพิมพ์เล็ก" value="<?php echo $row['menu_Name'];?>" />
                    </td>
                </tr>
                <tr>
                <td> ประเภทเมนูอาหาร: </td>
                    <td>
                    <select name="type">
                        <option value="1"
                            <?php if ($row['menu_Type'] == "1") {echo "selected";} ?>>1:อาหารคาว</option>
                        <option value="2"
                            <?php if ($row['menu_Type'] == "2") {echo "selected";} ?>>2:อาหารหวาน</option>
                        <option value="3"
                            <?php if ($row['menu_Type'] == "3") {echo "selected";} ?>>3:อาหารว่าง</option>
                   </select>
                    </td>
                </tr>
                <tr>
                <td> ราคา: </td>
                <td>
                    <input type="number" name="num_P"  value="<?php echo $row['menu_price'];?>"/>
                </td>
                <tr>    
            </table>  <br>
        <input type="submit" name="dal" value="ลบข้อมูล">
    </form>
	<?php
 require 'connect.php';
 if(isset($_POST['dal']))
 {
	 $idupd = $_POST['txt_id'];
 $upd = " DELETE FROM menu WHERE menu_ID = '$idupd'";
 $result = mysqli_query($con, $upd);
 if ($result)
	 { header('Location: index.php');}
 else{ echo 'ลบข้อมูลไม่สำเร็จ'; }
 }
?>

</table> <br>
</body>
</html>
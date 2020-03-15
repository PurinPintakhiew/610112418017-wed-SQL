<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>เพิ่มรายการอาหาร</title>

</head>

<body>
        <h1>เพิ่มรายการอาหาร</h1>
        <a href="index.php">Home</a> |
        <a href="search.php">ค้นหาข้อมูล</a> |
        <a href="InsertFrom.php">เพิ่มข้อมูล</a> |
        <a href="update.php">แก้ไขข้อมูล</a> |
        <a href="delete.php">ลบข้อมูล</a> 
        <hr>
<form action="insert.php" method="post" name="data">
        <fieldset style="width:50%">
            <table>
                <tr>
                    <td> รหัสเมนู: </td>
                    <td>
                        <input type="text" name="txt_id" pattern="m[0-9]{4}" title="รหัสเมนูขึ้นต้นด้วย m ตามด้วยตัวเลข  4 หลัก" required>
                    </td>
                </tr>
                <tr>
                    <td>ชื่อเมนูอาหาร:</td>
                    <td>
                        <input type="text" name="txt_name" title="ชื่อเมนูไม่เกิน 50 ตัว" required>
                    </td>
                </tr>
                <tr> 
                    <td>ประเภทอาหาร: </td>
                    <td>
                    <select name="TypeN" required>
                            <option value="1">1:อาหารคาว</option>
                            <option value="2">2:อาหารหวาน</option>
                            <option value="3">3:อาหารว่าง</option>
                 </select>  
                </tr>             
                <tr>
                    <td>ราคา:</td>
                    <td>
                        <input type="number" name="num_P" >
                    </td>
                </tr>    
            </table>
<br>
            <input type="submit" value="เพิ่มข้อมูล">
        </fieldset>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>

</head>
<body>
<h1>หน้าหลักโปรแกรม</h1>
<hr>
        <a href="index.php">Home</a> |
        <a href="search.php">ค้นหาข้อมูล</a> |
        <a href="InsertFrom.php">เพิ่มข้อมูล</a> |
        <a href="update.php">แก้ไขข้อมูล</a> |
        <a href="delete.php">ลบข้อมูล</a> 
<hr>
        <table width="50%" border="1" cellspacing="0" >
                <tr>
                    <th>รหัสเมนู</th>
                    <th>ชื่อเมนูอาหาร</th>
                    <th>ประเภทอาหาร</th>
                    <th>ราคา</th>
                </tr>
                
                <?php
                require 'connect.php';
                $result = mysqli_query($con, "SELECT * FROM menu");

                if ($result) 
                { 
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row["menu_ID"] . "</td>";
                        echo "<td>" . $row["menu_Name"] . "</td>";
                        echo "<td>" . $row["menu_Type"] . "</td>";
                        echo "<td>" . $row["menu_price"] . "</td>";
                        echo "</tr>";
                    }
                } 
                ?>               
        </table>
</body>
</html>
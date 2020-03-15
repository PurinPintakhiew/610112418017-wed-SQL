<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body>
    <h1>ค้นหารายการอาหาร </h1>
    <hr>
        <a href="index.php">Home</a> |
        <a href="search.php">ค้นหาข้อมูล</a> |
        <a href="InsertFrom.php">เพิ่มข้อมูล</a> |
        <a href="update.php">แก้ไขข้อมูล</a> |
        <a href="dalete.php">ลบข้อมูล</a> 
    <hr>
    <form action="" method="post">
       รหัส/ชื่อเมนูอาหาร :
        <input type="text" name="txt_id" />
        <input type="submit" value="ค้นหา" /> <br />
    </form>
    <br />
        <?php
        require 'connect.php';
      if (isset($_POST['txt_id'])) {  
            $id = $_POST['txt_id']; 
            $search = "SELECT * FROM menu WHERE menu_ID = '$id' OR menu_Name LIKE '%$id%' ";
            $result = mysqli_query($con, $search);
                  echo    "<table><tr> 
                              <th>รหัสเมนู</th> <th>ชื่อรายการอาหาร</th> <th>ประเภทอาหาร</th> <th>ราคา</th>
                          </tr>";
                  if($result) {  
                      while($row = mysqli_fetch_array($result)) {
                  echo "<td>" . $row["menu_ID"] . "</td>";
                  echo "<td>" . $row["menu_Name"] . "</td>";
                  echo "<td>" . $row["menu_Type"] . "</td>";
                  echo "<td>" . $row["menu_price"] . "</td>";
                  echo "</tr>";
                      }
                  echo "</table>";
                }
              }
 ?>         
        
    
</body>
</html>
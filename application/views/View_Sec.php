<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
    <br></br><br></br><br></br><br></br>
    <h1>ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
    <table border="1" style="width:100%">
  <tr>
    <th>รหัสนักศึกษา</th>
    <th>หมู่เรียน</th>
    <th>ชื่อ - นามสกุล</th>
    <th>ปีที่จบ</th>
    
    <th>จังหวัด</th>
  </tr>
<?php
        foreach($MA->result() as $row){
?>
<tr>
    <td><center><?php echo $row->Std_ID ?></center></td>
    <td><center><?php echo $row->sec ?></center></td>
    <td><center><?php echo $row->Name_LastName?></center></td>
    <td><center><?php echo $row->End_Year ?></center></td>
    <td><center><?php echo $row->province ?></center></td>
  </tr>
  <?php
         }

    ?>
    </table>
    </div>
    <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
    <?php include("footer.php");?>
</body>
</html>
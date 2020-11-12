<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
    <br></br><br></br><br></br><br></br>
      <h1>รายชื่อศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
      <table style="width:100%">
        <tr>
          <th>ชื่อ</th>
          <th>บัตรประชาชน</th>
          <th>วันเดือนปีเกิด</th>
          <th>เพศ</th>
          <th>ที่อยู่</th>
          <th>เบอร์โทร</th>
          <th>E-mail</th>
        </tr>
        <?php
          foreach($MA->result_array() as $row){
        ?>
        <tr>
          <td><?=$row['Name_LastName']?></td>
          <td><?=$row['ID_Card']?></td>
          <td><?=$row['Date_Of_Birth']?></td>
          <td><?=$row['Sex']?></td>
          <td><?=$row['Address']?></td>
          <td><?=$row['Tel']?></td>
          <td><?=$row['E_mail']?></td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>
    <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
    <?php include("footer.php");?>
<!--script-->
<script src="<?php echo base_url(); ?>js/myScript.js"></script>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/regis.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>img/n1.jpg');">
    <!---<div class="container" id="container"  align="center">
        <form action="./Alumni/reg_menu" method="post">
            <h1>Register</h1>
            <div id="body"  align="center">
                <form action="" method="post">
                    <table>
                        <div class="input">
                            <input type="text" name="username" placeholder="Username">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="button">
                            <input type="submit" value="Register">
                            <a href="../Alumni/index" class="button" id="button">Login</a>
                            <a href="../Alumni/home" class="button" id="button">home</a>
                        </div>
                    </table>
                </form>
            </div>
        </form>
    </div>-->
    <h1 class="title">สมัครสมาชิก</h1>
    <form method="post" action="../Alumni/reg_menu">
      <div class="box1">
      <h1>ข้อมูลส่วนตัว</h1>
        <p>
          รหัสนักศึกษา 
          <div class="input">
            <input name="Std_ID" type="text" maxlength="9"/>
          </div>
        </p><br><br><br><br>
        <p>
          ชื่อ-นามสกุล 
          <div class="input">
            <input name="Name_LastName" type="text" maxlength="100"/>
          </div>
        </p><br><br><br><br>
        <p>
          เลขบัตรประจำตัวประชาชน 
          <div class="input">
            <input name="ID_Card" type="text" id="ID_Card" size="30" maxlength="13"/>
          </div>
        </p><br><br><br><br>
        <p>
          วัน/เดือน/ปีเกิด 
          <div class="input">
            <label for="Date_Of_Birth"></label>
            <input type="date" name="Date_Of_Birth"/>
          </div>
        </p><br><br><br><br><br>
        <p>
          เพศ 
          <div class="sex">
            <input type="radio" name="Sex" value="ชาย"/>
            <label for="radio">ชาย</label>
            <input type="radio" name="Sex" value="หญิง"/>
            <label for="radio2">หญิง</label>
          </div>
        </p><br><br>
        <p>
          ที่อยู่ 
          <div class="input">
            <label for=""></label>
            <label for="textarea2"></label>
            <textarea name="Address"  cols="45" rows="5"></textarea>
          </div>
        </p><br><br><br><br><br><br><br>
        <p>
          เบอร์โทรศัพท์ 
          <div class="input">
            <label for="E-mail"></label>
            <input name="Tel" type="text" maxlength="10"/>
          </div>
        </p><br><br><br><br>
        <p>
          E-mail 
          <div class="input">
            <label for="textarea"></label>
            <label for="E_mail"></label>
            <input name="E_mail" type="text" id="E-mail" size="40" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          Facebook
          <div class="input">
            <label for="textfield"></label>
            <input name="Facebook" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          Instagram
          <div class="input">
            <input name="Instagram" type="text" maxlength="50" id="Instagram"/>
          </div>
        </p>
      </div>

      <div class="box2">
      <h1>ข้อมูลการศึกษา</h1>
        <p>
          ชื่อ - นามสกุลขณะศึกษาอยู่
          <div class="input">
            <input name="Name_LastName" type="text" maxlength="100"/>
          </div>
        </p><br><br><br><br>
        <p>
          ปีที่จบการศึกษา
          <div class="input">
            <label for="End_Year"></label>
            <input type="text" name="End_Year"/>
          </div>
        </p>
      </div>

      <div class="box3">
      <h1>ข้อมูลการทำงาน</h1>
        <p>
          ชื่อบริษัท
          <div class="input">
            <input name="Company_Name" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          ที่อยู่บริษัท
          <div class="input">
            <label for=""></label>
            <label for="textarea2"></label>
            <textarea name="Company_Address"  cols="45" rows="5"></textarea>
          </div>
        </p><br><br><br><br><br><br><br><br>
        <p>
          อาชีพ
          <div class="input">
            <input name="Profession" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          ตำแหน่ง
          <div class="input">
            <input name="Rank" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          เบอร์โทรศัพท์บริษัท
          <div class="input">
            <label for="Company_Tel"></label>
            <input name="Company_Tel" type="text" maxlength="10"/>
          </div>
        </p>
      </div>

      <div class="box4">
      <h1>สมัครสมาชิกเข้าสู่ระบบ</h1>
        <p>
          Username
          <div class="input">
            <input name="Username" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          รหัสผ่าน
          <div class="input">
            <input name="Password" type="password" maxlength="50" />
          </div>
        </p><br><br><br><br>
        <p>
          ยืนยันรหัสผ่าน
          <div class="input">
            <input name="Re_Password" type="password" maxlength="50" />
          </div>
        </p>
      </div>

      <div class="button">
        <input class="reg" name="submit" type="submit" value="Register" />
        <a href="../Alumni/index" class="button">Login</a>
      </div>
    </form>
</body>
</html>
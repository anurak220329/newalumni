<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NPRU Alumni</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
        </head>
<body>
<?php include("header.php");?>
<br></br><br></br><br></br>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
        
          <!-- /Breadcrumb -->
          <?php
  foreach($MA as $row){
  ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?=$row->Name_LastName;?></h4>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"><?=$row->Instagram;?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary"><?=$row->Facebook;?></span>
                  </li>
                </ul>
              </div>
            </div>
  
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">รหัสนักศึกษา</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Std_ID;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ชื่อนามสกุล</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Name_LastName;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เลขบัตรประชาชน</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->ID_Card;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">วันเกิด</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Date_Of_Birth;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ที่อยู่</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Address;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เบอร์โทร</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Tel;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">อีเมล์</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->E_mail;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ปีจบ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->End_Year;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ชื่อบริษัท</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Company_Name;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ที่อยู่บริษัท</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Company_Address;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">อาชีพ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Profession;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ตำแหน่ง</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Rank;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">เบอร์โทรศัพท์</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row->Company_Tel;?>
                    </div>
                  </div>
                  
                  <hr>
                  <center><a class="button btn btn-primary" href="../Alumni/edit">เเก้ไขข้อมูลส่วนตัว</a></center>
                </div>
             
              </div>
             
    </div>
    <?php
  }
  ?>
    <br></br>
    
<!--script-->

</body>
</html>
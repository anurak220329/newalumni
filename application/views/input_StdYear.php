<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php include("header.php");?>

    <div class="container">
    <br></br>  <br></br>  <br></br>  <br></br>  <br></br>
    <h1>ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
        <form action="../Alumni/search_Year" method="get">
            <center>
                <label class="title" for="Std_ID">ค้นหาด้วยปีที่จบ</label>
                <input class="input" type="text" id="End_Year" name="End_Year" value="">
                <input class="search" type="submit"  value="ค้นหา" />
            </center>
        </form>
    </div>
    <br></br>  <br></br>  <br></br>  <br></br>  <br></br>  <br></br>  <br></br>  <br></br>  <br></br>
    <?php include("footer.php");?>
</body>
</html>
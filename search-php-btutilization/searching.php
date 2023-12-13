<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>KM-NRRU ระบบค้นหาข้อมูลการใช้ประโยชน์</title>
    </head>
    <body>
        <div class="table-bordered">
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-10"> <br>
                    <h3>Searching System ระบบค้นหาข้อมูลการใช้ประโยชน์</h3>
                    <form action="" method="get">
                        <input type="search" name="q" required class="form-control" placeholder="ค้นหาชื่อที่ต้องการ"> <br>
                        <button type="submit" class="btn btn-primary">ค้นหาข้อมูล</button>
                        <a href="searching.php" class="btn btn-warning">เคลียร์ข้อมูล</a>
                    </form>
 
                    <?php
                    //ถ้ามีการส่ง $_GET['q'] 
                          if (isset($_GET['q'])){ 
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            //ประกาศตัวแปรรับค่าจากฟอร์ม
                            $q = "%{$_GET['q']}%";
                            $stmt = $conn->prepare("SELECT * FROM btutilization WHERE bt_years LIKE ?");
                            $stmt->execute([$q]);
                            $result = $stmt->fetchAll(); //แสดงข้อมูลทั้งหมด
 
                            //ถ้าเจอข้อมูลมากกว่า 0
                            if($stmt->rowCount() > 0) {
                      ?>
                      <br>
                    <h3>รายการชื่อปีที่ค้นพบ </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="3%">ลำดับ</th>
                                <th width="5%">ปี พ.ศ.</th>
                                <th width="30%">เชิงวิชาการ</th>
                                <th width="30%">เชิงสาธารณะ</th>
                                <th width="20%">เชิงนโยบาย</th>
                                <th width="30%">เชิงพาณิชย์</th>
                            </tr>
                        </thead>
                        <tbody>
 
                           <?php  foreach($result as $row)  {?>
                            <tr>
                                <td><?= $row['id'];?></td>
                                <td><?= $row['bt_years'];?></td>
                                <td><?= $row['bt_academic'];?></td>
                                <td><?= $row['bt_public'];?></td>
                                <td><?= $row['bt_policy'];?></td>
                                <td><?= $row['bt_commercial'];?></td>
                             </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br>
                  <?php } // if ($stmt->rowCount() > 0) {
                  else{
                    echo '<center> -ไม่พบข้อมูล !! </center>';
                    }
 
                  } //isset ?>

                </div>
            </div>
        </div>
    </body>
</html>
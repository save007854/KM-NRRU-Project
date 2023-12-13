<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>KM-NRRU ระบบค้นหาข้อมูลแนวปฏิบัติที่ดี</title>
    </head>
    <body>
        <div class="table-bordered">
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-10"> <br>
                    <h3>Searching System ระบบค้นหาข้อมูลแนวปฏิบัติที่ดี</h3>
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
                            $stmt = $conn->prepare("SELECT * FROM btpracticed WHERE bt_years LIKE ?");
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
                                <th width="3%">เรื่องที่</th>
                                <th width="5%">ปี พ.ศ.</th>
                                <th width="30%">ชื่อเรื่องภาษาไทย</th>
                                <th width="30%">ชื่อเรื่องภาษาอังกฤษ</th>
                                <th width="20%">ที่มาและความสำคัญ</th>
                                <th width="30%">วัตถุประสงค์</th>
                                <th width="30%">กลุ่มเป้าหมาย</th>
                                <th width="30%">กระบวนการจัดการความรู้</th>
                                <th width="20%">ผลลัพธ์หรือองค์ความรู้</th>
                                <th width="30%">ปัจจัยสู่ความสำเร็จ</th>
                                <th width="30%">เครื่องมือ</th>
                                <th width="30%">อ้างอิง</th>
                                <th width="20%">ผู้เขียน</th>
                                <th width="30%">กลุ่มแนวปฏิบัติที่ดี</th>
                                <th width="20%">ผู้รับผิดชอบ</th>
                                <th width="30%">ติดต่อ</th>
                            </tr>
                        </thead>
                        <tbody>
 
                           <?php  foreach($result as $row)  {?>
                            <tr>
                                <td><?= $row['id'];?></td>
                                <td><?= $row['bt_years'];?></td>
                                <td><?= $row['bt_titleth'];?></td>
                                <td><?= $row['bt_titleeng'];?></td>
                                <td><?= $row['bt_source'];?></td>
                                <td><?= $row['bt_objective'];?></td>
                                <td><?= $row['bt_targetgroup'];?></td>
                                <td><?= $row['bt_process'];?></td>
                                <td><?= $row['bt_result'];?></td>
                                <td><?= $row['bt_factor'];?></td>
                                <td><?= $row['bt_tool'];?></td>
                                <td><?= $row['bt_refer'];?></td>
                                <td><?= $row['bt_author'];?></td>
                                <td><?= $row['bt_practicegroup'];?></td>
                                <td><?= $row['bt_responsible'];?></td>
                                <td><?= $row['bt_contact'];?></td>
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
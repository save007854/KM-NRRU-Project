<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES["file"]["name"];
    $file_data = file_get_contents($_FILES["file"]["tmp_name"]);
    
    // เชื่อมต่อฐานข้อมูล (ใช้ mysqli หรือ PDO)
    $conn = new mysqli("localhost", "root", "", "files");

    // เตรียมคำสั่ง SQL
    $sql = "INSERT INTO files (file_name, file_data) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $file_name, $file_data);
    
    // ดำเนินการบันทึกไฟล์ลงในฐานข้อมูล
    if ($stmt->execute()) {
        echo "อัพโหลดไฟล์เรียบร้อยแล้ว.";
            } else {
        echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์.";
    }
    
    $stmt->close();
    $conn->close();
}
?>
        <a href="home.php">กลับหน้าแรก</a>
        
<?php
// เชื่อมต่อฐานข้อมูล
$conn = new mysqli("localhost", "root", "", "files");

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}

// รับ ID ที่ต้องการดึงข้อมูล
$id = $_GET['id'];

// เตรียมคำสั่ง SQL
$sql = "SELECT file_name, file_data FROM files WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

// ดำเนินการดึงข้อมูล
if ($stmt->execute()) {
    $stmt->bind_result($file_name, $file_data);
    $stmt->fetch();

    // แสดงข้อมูล
    echo "ID: " . $id . "<br>";
    echo "ชื่อไฟล์: " . $file_name . "<br>";
    echo "ที่อยู่ไฟล์: " . $file_data . "<br>";

    // ส่งไฟล์กลับไปยังผู้ใช้
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=" . $file_data);
    readfile($file_data);
} else {
    echo "ไม่สามารถดึงข้อมูลไฟล์ได้: " . $stmt->error;
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();
?>

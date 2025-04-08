<?php
session_start();
include '../config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profile_pic'])) {
    $uploadDir = "../uploads/profile_pics/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $file = $_FILES['profile_pic'];
    $newFileName = "profile_" . $user_id . "_" . uniqid() . "." . pathinfo($file["name"], PATHINFO_EXTENSION);
    $uploadPath = $uploadDir . $newFileName;

    if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
        $stmt = $conn->prepare("UPDATE users SET profile_pic = ? WHERE id = ?");
        $stmt->bind_param("si", $newFileName, $user_id);
        $stmt->execute();
    }
}

header("Location: dashboard.php");
exit();
?>

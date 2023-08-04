<?php
include 'includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $birth_date = $_POST["birth_date"];

    $sql = "INSERT INTO employees (first_name, last_name, email, birth_date) VALUES ('$first_name', '$last_name', '$email', '$birth_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm nhân viên thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

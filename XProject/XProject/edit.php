<?php
include 'includes/db_connection.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Không tìm thấy Nhân viên.";
        exit();
    }
} else {
    echo "Không có ID Nhân viên được cung cấp.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $birth_date = $_POST["birth_date"];

    $sql = "UPDATE employees SET first_name='$first_name', last_name='$last_name', email='$email', birth_date='$birth_date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thông tin thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Sửa thông tin Nhân viên</h2>
<form action="" method="post">
    <label for="first_name">Họ:</label>
    <input type="text" name="first_name" value="<?php echo $row["first_name"]; ?>" required><br>
    <label for="last_name">Tên:</label>
    <input type="text" name="last_name" value="<?php echo $row["last_name"]; ?>" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $row["email"]; ?>" required><br>
    <label for="birth_date">Ngày sinh:</label>
    <input type="date" name="birth_date" value="<?php echo $row["birth_date"]; ?>"><br>
    <input type="submit" value="Cập nhật">
</form>

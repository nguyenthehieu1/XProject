<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết Nhân viên</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="header">
        <img src="assets/logo.png" alt="Logo">
        <h1>Chi tiết Nhân viên</h1>
    </div>
    <div class="content">
        <?php
        include 'includes/db_connection.php';

        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            $sql = "SELECT * FROM employees WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<h2>Thông tin Nhân viên</h2>";
                echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
                echo "<p><strong>Họ:</strong> " . $row["last_name"] . "</p>";
                echo "<p><strong>Tên:</strong> " . $row["first_name"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Ngày sinh:</strong> " . $row["birth_date"] . "</p>";
            } else {
                echo "<p>Không tìm thấy Nhân viên.</p>";
            }
        } else {
            echo "<p>Không có ID Nhân viên được cung cấp.</p>";
        }

        $conn->close();
        ?>
        <p><a href="index.php">Quay lại</a></p>
    </div>
</body>
</html>

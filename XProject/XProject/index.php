<!DOCTYPE html>
<html>
<head>
    <title>Quản lý Nhân viên</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="header">
        <img src="assets/logo.png" alt="Logo">
        <h1>Quản lý Nhân viên</h1>
    </div>
    <div class="content">
        <h2>Danh sách Nhân viên</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Ngày sinh</th>
                <th>Chi tiết</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php
            include 'includes/db_connection.php';

            $sql = "SELECT * FROM employees";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["birth_date"] . "</td>";
                    echo '<td><a href="view.php?id=' . $row["id"] . '">Xem</a></td>';
                    echo '<td><a href="edit.php?id=' . $row["id"] . '">Sửa</a></td>';
                    echo '<td><a href="delete.php?id=' . $row["id"] . '">Xóa</a></td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Không có dữ liệu</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>
    <div class="content">
        <h2>Thêm Nhân viên</h2>
        <form action="add.php" method="post">
            <label for="first_name">Họ:</label>
            <input type="text" name="first_name" required><br>
            <label for="last_name">Tên:</label>
            <input type="text" name="last_name" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <label for="birth_date">Ngày sinh:</label>
            <input type="date" name="birth_date"><br>
            <input type="submit" value="Thêm">
        </form>
    </div>
</body>
</html>

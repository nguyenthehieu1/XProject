<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý Nhân viên </h3>
        <a href="<?='/XProject/add.php';?>" class ='btn btn-success'>Thêm mới</a>
    </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Email</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

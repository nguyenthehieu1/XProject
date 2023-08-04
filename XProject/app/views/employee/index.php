<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center">LIST OF EMPLOYEES</h3>
    <a class="btn btn-primary" href="<?=DOMAIN."/public/index.php?action=add" ?>">ADD NEW EMPLOYEE</a>
    <table class="table table-bodered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>SALARY</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($employees as $employee) {
                # code...
            ?>
            <tr>
                <td><?= $employee->getId() ?></td>
                <td><?= $employee->getName() ?></td>
                <td><?= $employee->getAddress() ?></td>
                <td><?= $employee->getSalary() ?></td>
                <td>
                    <a href="<?=DOMAIN."/public/index.php?action=edit&id=".$employee->getId()?>"
                        class="btn btn-info">Edit</a>
                </td>
                <td>
                    <a href="<?=DOMAIN."/public/index.php?action=delete&id=".$employee->getId()?>"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
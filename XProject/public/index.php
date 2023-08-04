<?php
    define("APP" , dirname(__FILE__,2));
    require_once APP."/app/libs/DBConnection.php";
    $controller = isset($_GET['controller']) ? $_GET['controller'] : "employee";
    $action = isset($_GET['action']) ? $_GET['action'] : "index";

    switch($controller){
        case "employee":
            require_once APP."/app/controllers/EmployeeController.php";
            require_once APP."/app/services/EmployeeService.php";
            require_once APP."/app/models/Employee.php";
            $employeeController = new EmployeeController();
            switch($action){
                case "index":
                    $employeeController->index();
                    break;
                case "delete";
                    $employeeController->destroy();
                    break;
                case "add":
                    $employeeController->create();
                    break;
                case "store":
                    $employeeController->store();
                    break;
                case "edit":
                    $employeeController->edit();
                    break;
                case "update":
                    $employeeController->update();
                    break;
                default:
                    break;
            }
            break;
        default:
            echo "404 Not Found";
            break;
    }
?>
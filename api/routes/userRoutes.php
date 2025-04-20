<?php
require_once '../controllers/UserController.php';

$controller = new UserController($pdo);

$method = $_SERVER['REQUEST_METHOD'];
$path = explode('/', trim($_SERVER['PATH_INFO'], '/'));

if ($path[0] === 'users') {
    if ($method === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode($controller->createUser($data));
    } elseif ($method === 'GET') {
        if (isset($path[1]) && is_numeric($path[1])) {
            echo json_encode($controller->getUser($path[1]));
        } else {
            echo json_encode($controller->getAllUsers());
        }
    } elseif ($method === 'PUT') {
        if (isset($path[1]) && is_numeric($path[1])) {
            parse_str(file_get_contents('php://input'), $data);
            echo json_encode($controller->updateUser($path[1], $data));
        } else {
            echo json_encode(["error" => "ID inválido"]);
        }
    } elseif ($method === 'DELETE') {
        if (isset($path[1]) && is_numeric($path[1])) {
            echo json_encode($controller->deleteUser($path[1]));
        } else {
            echo json_encode(["error" => "ID inválido"]);
        }
    } else {
        http_response_code(405);
        echo json_encode(["error" => "Método não permitido"]);
    }
}
?>
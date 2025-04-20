<?php
require_once 'db.php';
header('Content-Type: application/json');

$path = explode('/', trim($_SERVER['PATH_INFO'], '/'));

if ($path[0] === 'users') {
    require_once 'routes/userRoutes.php';
} else {
    http_response_code(404);
    echo json_encode(["error" => "Rota não encontrada"]);
}
?>
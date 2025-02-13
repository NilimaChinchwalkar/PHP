<?php
header("Content-Type: application/json");

require_once "db.php";

$database = new Database();
$db = $database->getConnection();

$method = $_SERVER['REQUEST_METHOD'];
// Fallback to REQUEST_URI if PATH_INFO is not set
$scriptName = $_SERVER['SCRIPT_NAME'];
$requestUri = $_SERVER['REQUEST_URI'];
$pathInfo = str_replace($scriptName, '', $requestUri);
$path = explode('/', trim($pathInfo, '/'));

if ($path[2] === 'users') {
    switch ($method) {
        case 'GET':
            if (isset($path[3])) {
                // Get a specific user
                $id = intval($path[3]);
                $stmt = $db->prepare("SELECT * FROM employee WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                echo json_encode($user ?: ['message' => 'User not found']);
            } else {
                // Get all users
                $stmt = $db->query("SELECT * FROM employee");
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($users);
            }
            break;

        case 'POST':
            // Create a new user
            $data = json_decode(file_get_contents("php://input"), true);
            //echo "<pre>"; print_r($data); echo "</pre>"; die;
            if (!empty($data['name']) && !empty($data['email'])) {
                $stmt = $db->prepare("INSERT INTO employee (name, email) VALUES (:name, :email)");
                $stmt->bindParam(':name', $data['name']);
                $stmt->bindParam(':email', $data['email']);
                if ($stmt->execute()) {
                    echo json_encode(['message' => 'User created']);
                } else {
                    echo json_encode(['message' => 'Failed to create user']);
                }
            } else {
                echo json_encode(['message' => 'Invalid input']);
            }
            break;

        case 'PUT':
            // Update an existing user
            if (isset($path[3])) {
                $id = intval($path[3]);
                $data = json_decode(file_get_contents("php://input"), true);
                $stmt = $db->prepare("UPDATE employee SET name = :name, email = :email WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $data['name']);
                $stmt->bindParam(':email', $data['email']);
                if ($stmt->execute()) {
                    echo json_encode(['message' => 'User updated']);
                } else {
                    echo json_encode(['message' => 'Failed to update user']);
                }
            } else {
                echo json_encode(['message' => 'User ID required']);
            }
            break;

        case 'DELETE':
            // Delete a user
            if (isset($path[3])) {
                $id = intval($path[3]);
                $stmt = $db->prepare("DELETE FROM employee WHERE id = :id");
                $stmt->bindParam(':id', $id);
                if ($stmt->execute()) {
                    echo json_encode(['message' => 'User deleted']);
                } else {
                    echo json_encode(['message' => 'Failed to delete user']);
                }
            } else {
                echo json_encode(['message' => 'User ID required']);
            }
            break;

        default:
            echo json_encode(['message' => 'Method not supported']);
            break;
    }
} else {
    echo json_encode(['message' => 'Endpoint not found']);
}
?>

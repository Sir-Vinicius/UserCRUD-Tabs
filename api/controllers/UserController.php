<?php
require_once '../models/User.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function createUser($data) {
        if (isset($data['name'], $data['email'], $data['password'])) {
            // Verificar se o e-mail já existe
            if ($this->userModel->getByEmail($data['email'])) {
                return ["error" => "E-mail já cadastrado"];
            }            

            $result = $this->userModel->create($data['name'], $data['email'], $data['password']);
            return $result ? ["message" => "Usuário criado com sucesso"] : ["error" => "Erro ao criar usuário"];
        }
        return ["error" => "Dados incompletos"];
    }

    public function getUser($id) {
        $user = $this->userModel->getById($id);
        return $user ?: ["error" => "Usuário não encontrado"];
    }

    public function getAllUsers() {
        return $this->userModel->getAll();
    }

    public function updateUser($id, $data) {
        if (isset($data['name'], $data['email'])) {
            // Verificar se o ID existe
            $user = $this->userModel->getById($id);
            if (!$user) {
                return ["error" => "Usuário não encontrado"];
            }

            $result = $this->userModel->update($id, $data['name'], $data['email']);
            return $result ? ["message" => "Usuário atualizado com sucesso"] : ["error" => "Erro ao atualizar usuário"];
        }
        return ["error" => "Dados incompletos"];
    }

    public function deleteUser($id) {
        $user = $this->userModel->getById($id);
        if (!$user) {
            return ["error" => "Usuário não encontrado"];
        }

        $result = $this->userModel->delete($id);
        return $result ? ["message" => "Usuário excluído com sucesso"] : ["error" => "Erro ao excluir usuário"];
    }

    public function getByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
<?php
class Users extends Model
{
    public function cadastrar_user($nome_user, $email_user, $senha_user, $color)
    {
        $sql = $this->db->prepare("INSERT INTO users (nome_user, email_user, senha_user, color) VALUES (:nome_user, :email_user, :senha_user, :color)");
        $sql->bindValue(":nome_user", $nome_user);
        $sql->bindValue(":email_user", $email_user);
        $sql->bindValue(":senha_user", $senha_user);
        $sql->bindValue(":color", $color);

        $sql->execute();
    }
    public function login($email_user, $senha_user)
    {
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users WHERE email_user = :email_user");
        $sql->bindValue(":email_user", $email_user);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha_user, $data['senha_user'])) {
                echo 'Password is valid!';
                return $data;
            } else {
                echo 'Invalid password.';
                return false;
            }
        }
        return false;
    }
    public function checar($id)
    {
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        return false;
    }

}

<?php
class Materias extends Model
{
    public function addMateria($nome_materia, $id_user)
    {
        $sql = $this->db->prepare('INSERT INTO materias (nome_materia, id_user) VALUES (:nomeMateria, :id_user)');
        $sql->bindValue(':nomeMateria', $nome_materia);
        $sql->bindValue(':id_user', $id_user);

        $sql->execute();
    }
    public function getMaterias($id_user){
        $data = array();
        $sql = $this->db->prepare('SELECT * FROM materias WHERE id_user = :id_user');
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        } return $data; 

    }
    // public function mostrarMat($id_user){
    //     $data = array();
    //     $sql = $this->db->prepare('SELECT * FROM materias WHERE id_user = :id_user');
    //     $sql->bindValue(':id_user', $id_user);
    //     $sql->execute();
    //     if ($sql->rowCount() > 0) {
    //         // Credenciais válidas, redirecionar para a página de anotações
    //         $data = $sql->fetch(PDO::FETCH_ASSOC);
    //     }return $data; 

    // }
 
}

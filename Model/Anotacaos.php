<?php
class Anotacaos extends Model
{
    public function addanotacao($titulo,$anotacao, $id_submateria, $id_user)
    {
        $sql = $this->db->prepare("INSERT INTO anotacaos (titulo, anotacao, id_submateria, id_user) VALUES (:titulo, :anotacao, :id_submateria, :id_user)");
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':anotacao', $anotacao);
        $sql->bindValue(':id_submateria', $id_submateria);
        $sql->bindValue(':id_user', $id_user);

        $sql->execute();
    }
    // public function procurarAnotacao($id_submateria){
    //     $array = array();
    //         $sql = $this->db->prepare('SELECT * FROM anotacaos WHERE id_submateria = :id_submateria');
    //         $sql->bindValue(':id_submateria', $id_submateria);
    //         $sql->execute();
    //         if($sql->rowCount() > 0){
    //             $array =  $sql->fetchAll(PDO::FETCH_ASSOC);
    //         }return $array;
    //     }

    public function getAnotacao($id_submateria)
    {
        $arrey = [];

        $sql = $this->db->prepare('SELECT * FROM anotacaos WHERE id_submateria = :id_submateria');
        $sql->bindValue(':id_submateria', $id_submateria);
        $sql->execute();

        if($sql->rowCount()>0){
            $arrey = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return $arrey;
        
    }
    public function editar($titulo, $anotacao, $id){
        $sql = $this->db->prepare('UPDATE anotacaos SET titulo = :titulo, anotacao = :anotacao WHERE id = :id');
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':anotacao', $anotacao);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function mostrarAnotacaoId($id){
        $arrey = [];
        $sql = $this->db->prepare('SELECT * FROM anotacaos WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
        if($sql->rowCount()>0){
            $arrey = $sql->fetch(PDO::FETCH_ASSOC);
        }
        return $arrey;
    }
    public function delete($id){
        $sql = $this->db->prepare('DELETE FROM anotacaos WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute(); 
    }
   
   

}

<?php
    class SubMateria extends Model{
        public function addSubMateria($titulo, $id_materia, $id_user){
            $sql = $this->db->prepare("INSERT INTO sub_materia (titulo, id_materia, id_user) VALUES (:titulo, :id_materia, :id_user)");
            $sql->bindValue(':titulo', $titulo);
            $sql->bindValue(':id_materia', $id_materia);
            $sql->bindValue(':id_user', $id_user);


            $sql->execute();
        }
        public function procurarSubMateria($id_materia, $id_user){
            $array = array();
            $sql = $this->db->prepare('SELECT * FROM sub_materia WHERE id_materia = :id_materia AND id_user = :id_user');
            $sql->bindValue(':id_materia', $id_materia);
            $sql->bindValue(':id_user', $id_user);

            $sql->execute();
            if($sql->rowCount() > 0){
                $array =  $sql->fetchAll(PDO::FETCH_ASSOC);
            }return $array;
        }
        public function procurarAnotacaoSubMateria($id_subMateria){
            $array = array();
            $sql = $this->db->prepare('SELECT titulo FROM sub_materia WHERE id = :id_materia');
            $sql->bindValue(':id_materia', $id_subMateria);
            $sql->execute();
            if($sql->rowCount() > 0){
                $array =  $sql->fetch(PDO::FETCH_ASSOC);
            }return $array;
        }
       
    }
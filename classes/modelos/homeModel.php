<?php
    namespace modelos;

    class homeModel{
        public static function getLojaItems(){
            $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.cursos`");
            $sql->execute();
            return $sql->fetchAll();
        }

        public static function depoimentos(){
            $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` LIMIT 1");
            $sql->execute();
            return $sql->fetchAll();
        }

        public static function servicos(){
            $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos`");
            $sql->execute();
            return $sql->fetchAll();
        }

        public static function hasCursoById($idAluno){
            $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.curso_controle` WHERE aluno_id = $idAluno");
            $sql->execute();

            if($sql->rowCount() == 1){
                return true;
            }else{
                return false;
            }
        }
    }
    
?>

<?php
    namespace controladores;

    class aulaController{
        public function index($arg){
            //Validação de Segurança
            if(isset($_SESSION['login_aluno']) == false){
                die('Não está logado');
            }else if(\modelos\homeModel::hasCursoById($_SESSION['id_aluno']) == false){
                die('Não tem o curso.');
            }
            //---------------------//
            
            $idAula = $arg[3];
            $aula = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE id = ?");
            $aula->execute(array($idAula));
            if($aula->rowCount() == 0){

            }else{
                $aula = $aula->fetch();
                include('views/area_aluno.php');
            }
        }
    }

?>
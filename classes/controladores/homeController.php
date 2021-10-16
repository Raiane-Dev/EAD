<?php
    namespace controladores;

    class homeController{

        public function index(){
            if(isset($_GET['addCurso'])){
                \MySql::conectar()->exec("INSERT INTO `tb_admin.curso_controle` VALUES (null,$_SESSION[id_aluno])");
                \Painel::redirect(INCLUDE_PATH);
            }
            if(isset($_GET['deslogar'])){
                unset($_SESSION['login_aluno']);
                \Painel::redirect(INCLUDE_PATH);
            }
            if(isset($_POST['acao'])){
                $login = $_POST['login'];
                $senha = $_POST['senha'];
                $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.alunos` WHERE email = ? AND senha = ?");
                $sql->execute(array($login,$senha));

                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
                    $_SESSION['login_aluno'] = $login;
                    $_SESSION['nome_aluno'] = $info['nome'];
                    $_SESSION['id_aluno'] = $info['id'];
                    $_SESSION['email_aluno'] = $info['email'];
                    $_SESSION['senha_aluno'] = $info['senha'];
                    \Painel::redirect(INCLUDE_PATH.'area_aluno/aula/1');
                }else{
                    \Painel::redirect(INCLUDE_PATH.'login');
                }
            }
            if(!isset($_SESSION['login_aluno'])){
                include('views/login.php');
            }else{
                include('views/home.php');
            }
        }

        public function login(){
            include('views/login.php');
        }
    }
?>
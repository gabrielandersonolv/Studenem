<?php
class UserController extends Controller
{
    public function index()
    {
        $data = array();
        $this->loadView("Admins/Usuarios/index", $data);
        exit;
    }
    public function telaCadastro()
    {
        $data = array();
        $this->loadView("Admins/Usuarios/cadastro", $data);
        exit;
    }
    public function cadastro()
    {
        if (
            isset($_POST['nome_user']) && !empty($_POST['nome_user']) &&
            isset($_POST['email_user']) && !empty($_POST['email_user']) &&
            isset($_POST['senha_user']) && !empty($_POST['senha_user']) &&
            isset($_POST['color']) && !empty($_POST['color'])

        ) {
            $cadastro = new Users();
            $nome_user = addslashes($_POST['nome_user']);
            $email_user = addslashes($_POST['email_user']);
            $senha_user = addslashes($_POST['senha_user']);
            $color = addslashes($_POST['color']);


            $senha_user = password_hash($senha_user, PASSWORD_DEFAULT);
          

            $cadastro->cadastrar_user($nome_user, $email_user, $senha_user, $color);
        }
        header('Location:' . BASE_URL . 'User/index');
        exit;
    }
    public function logar()
    {
        if (
            isset($_POST["email_user"]) && !empty($_POST["email_user"]) &&
            isset($_POST["senha_user"]) && !empty($_POST["senha_user"])
            ) {
                $user = new Users();
                $email_user = addslashes($_POST["email_user"]);
                $senha_user = addslashes($_POST["senha_user"]);
                
                $test = $user->login($email_user, $senha_user);

                $_SESSION['user'] = $test['id'];

            header("Location:" . BASE_URL . "Stude/tela1");
            exit;
        } 
        
        }
        public function logout(){

            $id = $_SESSION['user'];
    
            $user = new Users();
            
            if ($user->checar($id)) {
                unset($_SESSION['user']);
                header('Location:' . BASE_URL . 'User/index');
                exit;
            }
        }
    }


<?php
class StudeController extends Controller
{
    public function __construct()
    {
        // construct of class

        $id = $_SESSION['user'];

        $user = new Users();
        
        if (!$user->checar($id)) {
            header('Location:' . BASE_URL . 'User/index');
            exit;
        }
    }
    public function index()
    {
        $arrey = array();
        $this->loadView("Admins/Usuarios/index", $arrey);
        exit;
    }

    public function anotacaosalva($id = null)
    {
        $arrey = array();
        $stude = new Anotacaos();
        $materia = new Materias();
        $sub_materia = new SubMateria();
        $id_user = $_SESSION['user'];
        $arrey['lista_materias'] = $materia->getMaterias($id_user);
        $lista_anotacao = '';
        $procurar = '';
        $lista_subMateria = '';
        $item['titulo'] = null;
        $arrey['id_submateria'] = null;
        if ($id != null) {
            $arrey['id_submateria'] = $id;
            $lista_anotacao = $stude->getAnotacao($id);
            $procurar = $sub_materia->procurarAnotacaoSubMateria($id);
        }

        foreach ($arrey['lista_materias'] as &$item) {
            $item['sub_materias'] = $sub_materia->procurarSubMateria($item['id'], $id_user);
        }
        $arrey['titulo'] = $procurar;
        //    echo "<pre>";
        //    var_dump($procurar);
        //    exit;

        $lista_anotacao = $stude->getAnotacao($id);
        $arrey["lista_anotacao"] = $lista_anotacao;

        $this->loadTemplateSite("Admins/Studenem/anotacaosalva", $arrey);
        exit;
    }
    public function tela1($id = null)
    {
        $arrey = array();
        $stude = new Anotacaos();
        $materia = new Materias();
        $sub_materia = new SubMateria();
        $id_user = $_SESSION['user'];
        $arrey['lista_materias'] = $materia->getMaterias($id_user);
        $lista_anotacao = '';
        $procurar = '';
        $lista_subMateria = '';
        $item['titulo'] = null;
        $arrey['id_submateria'] = null;
        
        if ($id != null) {
            $arrey['id_submateria'] = $id;
            $lista_anotacao = $stude->getAnotacao($id);
            $procurar = $sub_materia->procurarAnotacaoSubMateria($id);
        }
        
        foreach ($arrey['lista_materias'] as &$item) {
            $item['sub_materias'] = $sub_materia->procurarSubMateria($item['id'], $id_user);
        }
       
        $user = new Users();
        $arrey['user'] = $user->checar($id_user); 

        $arrey['titulo'] = $procurar;
        $this->loadTemplateSite("Admins/Studenem/tela1", $arrey);
        exit;
    }
    public function addmateria()
    {
        $data = array();

        $this->loadTemplateSite("Admins/Studenem/addmateria", $data);
        exit;
    }
    public function addanotacao($id)
    {
        $data = array();
        $data['id'] = $id;

        $this->loadTemplateSite("Admins/Studenem/addanotacao", $data);
        exit;
    }

    public function guardar()
    {
        if (
            isset($_POST['titulo']) && !empty($_POST['titulo']) &&
            isset($_POST['anotacao']) && !empty($_POST['anotacao']) &&
            isset($_POST['id_submateria']) && !empty($_POST['id_submateria'])
        ) {
            $stude = new Anotacaos();
            $titulo = $_POST['titulo'];
            $anotacao = $_POST['anotacao'];
            $id_submateria = $_POST['id_submateria'];
            $id = $_SESSION['user'];
            $stude->addanotacao($titulo, $anotacao, $id_submateria, $id);

            header('Location:' . BASE_URL . 'Stude/anotacaosalva/' . $id_submateria);
            exit;
        }
    }
    public function edit($id)
    {
        $arrey = array();
        $stude = new Anotacaos();
        $materia = new Materias();
        $sub_materia = new SubMateria();
        $id_user = $_SESSION['user'];
        $arrey['lista_materias'] = $materia->getMaterias($id_user);
        $lista_anotacao = '';
        $procurar = '';
        $lista_subMateria = '';
        $item['titulo'] = null;
        $arrey['id_submateria'] = null;
        
        if ($id != null) {
            $arrey['id_submateria'] = $id;
            $lista_anotacao = $stude->getAnotacao($id);
            $procurar = $sub_materia->procurarAnotacaoSubMateria($id);
        }
        
        foreach ($arrey['lista_materias'] as &$item) {
            $item['sub_materias'] = $sub_materia->procurarSubMateria($item['id'], $id_user);
        }
       
        $user = new Users();
        $arrey['user'] = $user->checar($id_user); 

        $arrey['titulo'] = $procurar;
        $stude = new Anotacaos();


        $lista_anotacao = $stude->mostrarAnotacaoId($id);

        $arrey['lista_anotacao'] = $lista_anotacao;
        $this->loadTemplateSite("Admins/Studenem/editanotacao", $arrey);
        exit;
    }
    public function update($id)
    {
        $stude = new Anotacaos();

        if (
            isset($_POST['titulo']) && !empty($_POST['titulo']) &&
            isset($_POST['anotacao']) && !empty($_POST['anotacao'])
        ) {

            $titulo = $_POST['titulo'];
            $anotacao = $_POST['anotacao'];

            $stude->editar($titulo, $anotacao, $id);
        }
        header('Location:' . BASE_URL . 'Stude/anotacaosalva');
        exit;
    }
    public function delete()
    {
        $stude = new Anotacaos();

        if (isset($_GET['delete'])) {

            $id = $_GET['delete'];
            $stude->delete($id);
        }
        header('Location:' . BASE_URL . 'Stude/anotacaosalva');
        exit;
    }
    public function guardarMateria()
    {
        if (isset($_POST['nomeMateria']) && !empty($_POST['nomeMateria'])) {
            $nome_materia = addslashes($_POST['nomeMateria']);

            $materia = new Materias();
            $materia->addMateria($nome_materia, $_SESSION['user']);

            header('Location:' . BASE_URL . 'Stude/anotacaosalva');
            exit;
        }
    }
    public function guardarSubMateria()
    {
        if (
            isset($_POST['titulo']) && !empty($_POST['titulo']) &&
            isset($_POST['id_materia']) && !empty($_POST['id_materia'])
        ) {
            $titulo = addslashes($_POST['titulo']);
            $id_materia = addslashes($_POST['id_materia']);
            $subMateria = new SubMateria();
            $id = $_SESSION['user'];
            $subMateria->addSubMateria($titulo, $id_materia, $id);
            header('Location:' . BASE_URL . 'Stude/anotacaosalva');
            exit;
        }
    }

}
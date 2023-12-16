<!DOCTYPE html>
<html lang="en" style="height: 100vh;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>Assets/css/style.css">
    <title>Document</title>
</head>

<body class="h-100">
    <div class="row m-0 h-100">
        <div class="col-6 bg-primary d-flex justify-content-center align-items-center ">
            <div class=" ">
                <img src="<?= BASE_URL . 'Assets/img/login_1.png' ?>" alt="" class="" style="width: 636px;">
            </div>
        </div>
        <div class=" col-6 d-flex justify-content-center align-items-center flex-column">
            <div class="text-center">
                <h1>
                    Cadastro
                </h1>
            </div>
            <form action="<?= BASE_URL . 'User/cadastro' ?> " method="post" class="w-75 gap-4 d-flex justify-content-center mt-5 flex-column ">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" class="form-control form-control-sm bg-body-secondary h-75" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_user" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm bg-body-secondary h-75" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_user" placeholder="Digite seu email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control form-control-sm bg-body-secondary h-75" id="exampleInputPassword1" name="senha_user" placeholder="Digite sua senha">
                </div>
                <div class="d-flex gap-2" >
                    <div class="mt-1">

                        <p>Cor do seu icone:</h5>
                    </div>
                    <div>

                        <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#0D6EFD" title="Choose your color">
                    </div>
                </div>
                <div class="d-flex flex-column gap-3 mt-">

                    <button type="submit" class="btn btn-sm btn-primary">Cadastrar</button>
                </div>
                <div class="d-flex gap-2">

                    <p>Já possui uma conta?</p><a href="<?= BASE_URL . 'User/index' ?>" class="">Entrar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
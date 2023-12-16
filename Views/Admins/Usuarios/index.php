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
            <div class=" " >
                <img src="<?=BASE_URL.'Assets/img/login_1.png'?>" alt="" class="img-fluid" style="width: 696px;">
            </div>
        </div>
        <div class=" col-6 d-flex justify-content-center align-items-center flex-column">
            <div class="text-center">
                <h1>
                    Tela de Login
                </h1>
            </div>
            <form class="w-75 gap-4 d-flex justify-content-center mt-5 flex-column " action="<?= BASE_URL. 'User/logar'?>" method="post" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control  bg-body-secondary h-75" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" name="email_user">
                </div>
                <div class="mb-3 mt-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control  bg-body-secondary h-75" id="exampleInputPassword1" placeholder="Digite sua senha" name="senha_user" >
                </div>
                <div class="d-flex flex-column gap-3 mt-3" >
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
                <div class="d-flex gap-3" >

                    <p>Não tem uma conta?</p><a href="<?=BASE_URL. 'User/telaCadastro'?>" class="">Inscreva-se</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
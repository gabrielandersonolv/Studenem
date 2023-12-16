<!DOCTYPE html>
<html lang="en" style="height: 100vh;">

<head>
    <meta charset="UTF-8">
    <!-- BootStrap -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL . 'Assets/css/style.css' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div>
            <div class="row m-0"> <!-- div que conterá as colunas -->
                <nav class="col-4 col-md-2 bg-primary  " style="min-height: 100vh;">
                    <div> 
                        <div class=" ">
                            <div class="mt-4">
                                <div>
                                    <h4 class="text-white align-middle">Studenem</h1>
                                </div>
                            </div>
                            <div id="colapse-princ" class="mt-5">
                                <div class="d-flex justify-content-between w-100 rounded-0 materia ">
                                    <div>
                                        <a class="nav-link text-white w-100 d-flex" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class='bx bx-chevron-down fs-5 mt-1' style='color:#ffffff'></i>
                                            <h5 class="fs-5">Matérias</h5>
                                        </a>
                                    </div>
                                    <div class="">
                                        <a data-bs-toggle="collapse" href="#collapseExampleinput" role="button" aria-expanded="true" aria-controls="collapseExample"><i class='bx bx-message-alt-add fs-5 mt-0' style='color:#ffffff; margin-left:-30%;'></i></a>
                                    </div>
                                </div>
                                <div class="collapse show" id="collapseExample">
                                    <div class="collapse" id="collapseExampleinput">
                                        <div class="p-3 card-body d-flex gap-3">
                                            <form action="<?= BASE_URL . 'Stude/guardarMateria' ?>" method="post" class="d-flex gap-1">
                                                <div>
                                                    <input type="text" class="form-control form-control-sm" placeholder="Adicionar matéria" aria-label="First name" name="nomeMateria">
                                                </div>

                                                <div>
                                                    <button type="submit" class="btn btn-sm bg-success text-white">Adicionar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card bg-transparent border-0 d-inline-block w-75 ml-3 mt-2 scroll-1">

                                        <?php foreach ($viewData['lista_materias'] as $item) : ?>
                                            <div class="col">
                                                <div class=" ">
                                                    <div class="d-flex">
                                                        <div>
                                                            <a class="nav-link d-flex gap- border-0 atv text-decoration-none" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample" href="#collapseExamplediv<?= $item['id']; ?>">
                                                                <i class='bx bx-chevron-down fs-4' style='color:#FFFF'></i>
                                                                <p class="text-white"><?= $item['nome_materia']; ?></p>
                                                            </a>
                                                        </div>
                                                        <div class="ml-3">
                                                            <a data-bs-toggle="collapse" href="#collapseExampleInput<?= $item['id']; ?>" role="button" aria-expanded="true" aria-controls="collapseExample"><i class='bx bx-message-alt-add fs-5 mt-1' style='color:#ffffff; margin-left:-30%;'></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="collapse" id="collapseExampleInput<?= $item['id']; ?>">
                                                    <div class="p-2  card-body d-flex gap-3">
                                                        <form action="<?= BASE_URL . 'Stude/guardarSubmateria' ?>" method="post" class="d-flex gap-1">
                                                            <div>
                                                                <input type="text" class="form-control form-control-sm" placeholder="Adicionar conteúdo" aria-label="First name" name="titulo">
                                                                <input type="hidden" name="id_materia" value="<?= $item['id'] ?>">
                                                            </div>
                                                            <div>
                                                                <button type="submit" class="btn bg-success text-white btn-sm">Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <?php foreach ($item['sub_materias'] as $item2) : ?>
                                                    <div class="collapse atv-cont col-3 mb-3 ml-3" id="collapseExamplediv<?= $item['id']; ?>">
                                                        <div class="card border-0 bg-transparent">

                                                            <div class="d-flex gap-2    ">
                                                                <i class='bx bxs-circle mt-2' style="color: #ffffff; font-size: 9px;"></i>
                                                                <a href="<?= BASE_URL . 'Stude/anotacaosalva/' . $item2['id']; ?>" class="text-decoration-none text-white nav-link"><?= $item2['titulo'] ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div>
                                        <a class="nav-link text-white w-100 d-flex gap-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class='bx bx-book-bookmark fs-6 mt-2' style='color:#ffffff'></i>
                                            <h5 class=" mt-1">Exércicios </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class=" col-8 col-md-10 container">

                    <?php $this->loadViewInTemplate($viewName, $viewData) ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
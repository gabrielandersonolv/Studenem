<div class=" bg-white shadow-one p-3">
    <nav class="d-flex  justify-content-between" >

        <div class=" ">
            <h4 class="fw-bold">Studenem</h1>
        </div>
        <div class="d-flex gap-2 ">
    
            
            <div class="mt-">
                <a class=" dropdown-center d-flex align-self-center gap-1 text-dark text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-user-circle fs-3' style='color:<?= $user['color'] ?>'></i>
                    <?= $user['nome_user'] ?>
                    <i class='bx bxs-chevron-down fs-6 mt-1'></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item accordion-button collapsed" href="<?= BASE_URL . 'User/logout' ?>"><i class='bx bx-exit  fs-3' style='color:#e01d21'></i></a></li>
                    <li><a href="" class="text-decoration-none text-white dropdown-item">Perfil</a></li>
                </ul>
            </div>
        </div>
    </div>
    </nav>
<div class="d-flex justify-content-center flex-column mt-4 p-3  ">
    <div id="carouselExampleIndicators" class="carousel slide mb-4">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="d-flex justify-content-center mt-4">

            <div class="carousel-inner carrossel " style="width: 100%;">
                <div class="carousel-item active">
                    <img src="<?= BASE_URL . 'Assets/img/Caiu.png' ?>" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL . 'Assets/img/Caiu-1.png' ?>" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL . 'Assets/img/Caiu-1.png' ?>" class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<div class="row d-flex  justify-content-around mt-5 mb-5 gap-3">

    <div class="col-md-5  col-sm-10  shadow-sm rounded p-4  gap-2 cards-color" style="background-color: #FFF;">
        <div class="align-items-center  d-flex gap-2 w-75 ">

            <div>
                <i class='bx bx-book-add fs-1' style='color:#33aacd'></i>
            </div>
            <h3 class="align-items-center">
                Plano de estudos
            </h3>
        </div>
        <div class="mt-3">
            <h4 class="text-secondary-emphasis text-card mb-3">Milhares de exercícios para praticar</h4>
            <p class="">
                Acreditamos que, para obter sucesso, a melhor estratégia é aplicar os seus conhecimentos. Por isso, disponibilizamos um banco de questões com soluções em vídeo, para que possa criar listas de exercícios e até mesmo salvá-las em PDF.
            </p>

        </div>
    </div>

    <div class="col-md-5  col-sm-10 shadow-sm rounded p-4  gap-2 cards-color" style="background-color: #FFF;">
        <div class="align-items-center  d-flex gap-2 w-75">

            <div>
                <i class='bx bx-edit fs-1' style='color:#33aacd'></i>
            </div>
            <h3 class="align-items-center">
                Banco de questões
            </h3>
        </div>
        <div class="mt-3">
            <h4 class="text-secondary-emphasis text-card mb-3">Um plano feito para você</h4>
            <p class="">
                Acreditamos que, para obter sucesso, a melhor estratégia é aplicar os seus conhecimentos. Por isso, disponibilizamos um banco de questões com soluções em vídeo, para que possa criar listas de exercícios e até mesmo salvá-las em PDF.
            </p>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center flex-column">
    <div class="d-flex mt-4 align-items-center justify-content-center text-center">
        <div class="col-7">
        <h3><strong>Adicionar Anotações</strong> </h3>

        </div>

    </div>

    <div class="d-flex align-items-center">
        <form action="<?= BASE_URL . 'Stude/guardar' ?>" method="post" class="d-flex flex-column justify-content-center w-100 p-4 mt-5">

            <input type="hidden" name="id_submateria" value="<?= $id ?>">
            <div class="mb-3">
                <input type="text" class="form-control bg-body-secondary border-1 border-secondary" name="titulo" placeholder="Título">
                <div id="emailHelp" class="form-text ">Digite o título da sua anotação</div>
            </div>
            <div class="mb-3">
                <textarea class="form-control bg-body-secondary border-1 border-secondary" id="exampleFormControlTextarea1" rows="15" placeholder="Anotações" name="anotacao"></textarea>
                <div id="emailHelp" class="form-text">Digite sua anotação</div>
            </div>
            <a href=""><button type="submit" class="btn btn-primary w-25 ">Adicionar</button></a>

        </form>

    </div>
</div>
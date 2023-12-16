
    <div class="d-flex justify-content-center flex-column" >

        <div class="row mb-1">
            <div class="d-flex mt-4 align-items-center justify-content-center text-center">
                <div class="col-7">
                <h3><strong>Editar Anotações</strong></h3>
                </div>
                <div class="col-0">
                    <i class='bx bxs-message-alt-add fs-1' style='color:#0f892a'></i>
                </div>

            </div>

        </div>
        <div class="row">
            <form action="<?=BASE_URL.'Stude/update/' .$lista_anotacao['id']?>" method="post" class="d-flex flex-column justify-content-center w-100 p-4 mt-2" >
                <div>
                    
                    <div class="mb-3">
                        <input type="text" class="form-control bg-body-secondary border-1 border-secondary" name="titulo" placeholder="Título" value="<?= $lista_anotacao['titulo']?>">
                        <div id="emailHelp" class="form-text">Digite o título da sua anotação</div>
                    </div>
                    <div class="mb-3">
                    <textarea class="form-control bg-body-secondary border-1 border-secondary" id="exampleFormControlTextarea1" rows="15" placeholder="Anotações" name="anotacao" ><?= $lista_anotacao['anotacao']?></textarea>
                    <div id="emailHelp" class="form-text">Digite sua anotação</div>
                    </div>
                  <div class="d-flex gap-5">

                      <a href=""><button type="submit" class="btn btn-primary w-10 ">Editar</button></a>
                      <a href="<?= BASE_URL.'Stude/delete?delete=' .$lista_anotacao['id']?>">Excluir</a>
                  </div>
                </div>

            </form>

        </div>
    </div>


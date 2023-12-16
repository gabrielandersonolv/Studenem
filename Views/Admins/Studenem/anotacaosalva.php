<div style="height: 100vh; overflow-y: scroll; overflow-x: hidden;">

    <div class="row mb-5">
        <div class="d-flex mt-4 align-items-center justify-content-center text-center">
            <div class="col-7">
                <h3><strong>Anotações</strong> - <?= isset($titulo['titulo']) ? $titulo['titulo'] : '' ?></h3>
            </div>
            <div class="col-0">
                <a href="<?= BASE_URL . 'Stude/addanotacao/' . $id_submateria; ?>"><i class='bx bxs-message-alt-add fs-1' style='color:#0f892a'></i></a>
            </div>
        </div>
        <div class="d-flex flex-column gap-5 mt-2 p-5">
            <?php if (!empty($lista_anotacao)) : ?>
                <?php foreach ($lista_anotacao as $stude) : ?>
                    <div>
                        <div class="shadow-sm rounded bg-dark-subtle">
                            <div class="p-2">

                                <a href="<?= BASE_URL . 'Stude/edit/' . $stude['id'] ?>" class="text-decoration-none text-black">
                                    <h4 class="fw-bold"><?= $stude['titulo']; ?></h4>
                                    <p><?= $stude['anotacao']; ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                Nenhuma Anotação Encontrada Para essa Submateria
            <?php endif; ?>
        </div>

    </div>
</div>
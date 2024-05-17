<h2>Projetos</h2>
<div class="panel-body">
    <table id="tabela" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Duração</th>
                <th width="280px">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetos as $projeto) { ?>
                <tr>
                    <td><?php echo $projeto->nome; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($projeto->duracao)); ?></td>
                    <td>
                        <a class="btn btn-primary" href="?classe=Projeto&acao=read&id=<?php echo $projeto->id; ?>">Ver</a>
                        <a class="btn btn-primary" href="?classe=Projeto&acao=update&id=<?php echo $projeto->id; ?>">Alterar</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="<?php echo $projeto->id; ?>">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

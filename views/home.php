<h2>Lista de Clientes</h2>
<div class="fomr-group">
        
        <hr>
</div>
<div class="table-responsive-sm">
        <table class="table table-hover" id="tabela">
                <thead class="table-secondary">
                        <tr>
                                <td>Nome</td>
                                <td>idade</td>
                                <td>telefone</td>
                                <td>ações</td>
                                <td>status</td>
                        </tr>
                </thead>
                <tbody>
                        <?php 
                        foreach ($viewData as $row) : ?>
                                <tr>
                                        <td><?php echo $row['nome'] ?></td>
                                        <td><?php echo $row['idade'] ?></td>
                                        <td><?php echo $row['tel'] ?></td>
                                        <td>
                                                <button class="btn btn-danger btn-excluir" id="excluirCadastro" data-idCad="<?php echo $row['id'] ?>">excluir</button>
                                                <?php if ($row['status'] == 'Ativo') {
                                                        $estadoAtual = "Inativar";
                                                } else {
                                                        $estadoAtual = "Ativar";
                                                }; ?>
                                                <button class="btn btn-outline-secondary btn-status" id="alterarStatus" data-idCad="<?php echo $row['id'] ?>"><?php echo $estadoAtual; ?></button>
                                        </td>
                                        <td><?php echo $row['status'] ?></td>
                                </tr>
                        <?php endforeach;
                        ?>
                </tbody>
        </table>
</div>



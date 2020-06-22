<h1>usuarios</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Criação</object></th>
                <th><a href="?controller=UsuarioController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($usuario) {
                foreach ($usuario as $usuario) {
                    ?>
                    <tr>
                        <td><?php echo $usuario->nome; ?></td>
                        <td><?php echo $usuario->email; ?></td>
                        <td><?php echo $usuario->dt_criacao; ?></td>
                        <td>
                            <a href="?controller=usuarioController&method=editar&id=<?php echo $usuario->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=usuarioController&method=excluir&id=<?php echo $usuario->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
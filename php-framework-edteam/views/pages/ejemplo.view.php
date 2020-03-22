<?php include APP_PATH.'/views/partials/head.php' ?>

<table class="table">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
    </thead>
    <tbody>
        <?php foreach($datos as $usuario):?>
        <tr>
            <td><?php echo $usuario->id_usuario; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td><?php echo $usuario->telefono; ?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>

<?php include APP_PATH.'/views/partials/footer.php' ?>
<form action="" method="post">
    <input type="text" name='nombre' placeholder="Nombre">
    <input type="email" name='correo' placeholder="Correo">
    <input type="text" name='rol' placeholder="Rol">
    <input type="number" name='telefono' placeholder="Telefono">
    <!-- x<input type="password" name='Contraseña' placeholder="contraseña">*/ -->

    <button type="submit">Guardar</button>
    
</form>

<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Telefono</td>
            <td>Rol</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->getId() ?></td>
                <td><?=$usuario->getNombre() ?></td>
                <td><?=$usuario->getCorreo() ?></td>
                <td><?=$usuario->getRol() ?></td>
                <td><?=$usuario->getTelefono() ?></td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>
<?php
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $Dui = $_POST['Dui'];
    $Direccion = $_POST['Direccion'];
    $Direccion = $_POST['Telefono'];
    $email = $_POST['email'];
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">codigo</th>
                <th scope="col">nombre</th>
                <th scope="col">dui</th>
                <th scope="col">direccion</th>
                <th scope="col">telefono</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $codigo ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo $dui ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $email ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php require 'includes/header.php' ?>

<h2>Ejercicio 2 - Formulario</h2>
<form action="02recibir.php" method="POST" enctype="multipart/form-data">

    <label for="nif">NIF:
        <input type="text" required name="nif" class="form-control" />
    </label>
    </br>

    <label for="nombre">Nombre:
        <input type="text" required name="nombre" class="form-control" />
    </label>
    </br>

    <label for="apellidos">Apellidos:
        <input type="text" required name="apellidos" class="form-control" />
    </label>
    </br>

    <label for="fecha">Fecha de Nacimiento:
        <input type="date" required name="fecha" class="form-control" />
    </label>
    </br>

    <label for="email">Correo Electrónico:
        <input type="email" required name="email" class="form-control" />
    </label>
    </br>

    <label for="password">Contraseña:
        <input type="password" required name="password" class="form-control" />
    </label>
    </br>

    <input type="submit" value="Enviar" required name="submit" class="btn btn-success" />

</form>

<?php require 'includes/footer.php'; ?>
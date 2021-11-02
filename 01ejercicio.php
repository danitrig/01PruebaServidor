<?php require 'includes/header.php' ?>

<h2>Ejercicio 1 - Calcular Raíz Cuadrada de un polinomio de 2º Grado</h2>
<h3>Introduzca los coeficientes del polinomio de segundo grado</h3>
<form action="recibir.php" method="POST" enctype="multipart/form-data">

<p>Para la fórmula <b>aX^2 + bX + c</b>, introduzca: </p>

    <label for="a">Valor de 'a':
        <input type="number" name="a" class="form-control" />
    </label>
    </br>

    <label for="b">Valor de 'b':
        <input type="number" name="b" class="form-control" />
    </label>
    </br>
    
    <label for="c">Valor de 'c':
        <input type="number" name="c" class="form-control" />
    </label>
    </br>

    <input type="submit" value="Calcular" name="submit" class="btn btn-success" />

</form>

<?php require 'includes/footer.php'; ?>
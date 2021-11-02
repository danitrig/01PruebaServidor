<?php

if (isset($_POST["submit"])) {
    //En preg_match es donde van metidas las expresiones regulares
    //Con filter_var sanitizamos los campos, eliminando carácteres que puedan dar problemas

    $_POST["a"] = filter_var($_POST["a"], FILTER_SANITIZE_NUMBER_FLOAT);

    if (
        !empty($_POST["a"]) && is_numeric($_POST["a"]) && filter_var($_POST["a"], FILTER_VALIDATE_FLOAT)
    ) {
        $a = $_POST['a'];
    } else {
        echo "No se ha definido 'a' :(<br/>";
    }

    $_POST["b"] = filter_var($_POST["b"], FILTER_SANITIZE_NUMBER_FLOAT);

    if (
        !empty($_POST["b"]) && is_numeric($_POST["b"]) && filter_var($_POST["b"], FILTER_VALIDATE_FLOAT)
    ) {
        $b = $_POST['b'];
    } else {
        echo "No se ha definido 'b' :(<br/>";
    }

    $_POST["c"] = filter_var($_POST["c"], FILTER_SANITIZE_NUMBER_FLOAT);

    if (
        !empty($_POST["c"]) && is_numeric($_POST["c"]) && filter_var($_POST["c"], FILTER_VALIDATE_FLOAT)
    ) {
        $c = $_POST['c'];
    } else {
        echo "No se ha definido 'a' :(<br/>";
    }



    if (isset($a, $b, $c)) {


        $disc = $b * $b - 4 * $a * $c;
        echo "Para " . $a . " X ^ 2 + " . $b . " X + " . $c . "<br><br>";

        $resultado1 = 0.0;
        $resultado2 = 0.0;

        if ($disc < 0) {
            echo "No existen raíces reales";
        } elseif ($disc == 0) {
            $resultado1 = -1 * $b / 2 * $a;
            echo "<br>X1 = X2 = " . $resultado1;
        } else {
            $resultado1 = (-1 * $b + sqrt($disc)) / (2 * $a);
            $resultado2 = (-1 * $b - sqrt($disc)) / (2 * $a);
            echo "<br>X1 = " . $resultado1;
            echo "<br>X2 = " . $resultado2;
        }
    }
}

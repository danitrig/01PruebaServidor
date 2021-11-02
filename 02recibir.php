<?php

if (isset($_POST["submit"])) {
    //En preg_match es donde van metidas las expresiones regulares
    //Con filter_var sanitizamos los campos, eliminando carácteres que puedan dar problemas

    $_POST["nif"] = filter_var($_POST["nif"], FILTER_SANITIZE_STRING);

    if (
        !empty($_POST["nif"]) && preg_match("/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/", $_POST["nif"])
    ) {
        echo $_POST["nif"] . "<br/>";
    } else {
        echo "No definido :(<br/>";
    }

    $_POST["nombre"] = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);

    if (
        !empty($_POST["nombre"]) && strlen($_POST["nombre"]) <= 15 &&
        preg_match("/^[a-zA-Z ]*$/", $_POST["nombre"])
    ) {
        echo $_POST["nombre"] . "<br/>";
    } else {
        echo "No definido :(<br/>";
    }


    $_POST["apellidos"] = filter_var($_POST["apellidos"], FILTER_SANITIZE_STRING);

    if (
        !empty($_POST["apellidos"]) && strlen($_POST["apellidos"]) <= 20 &&
        !is_numeric($_POST["apellidos"]) && preg_match("/^[a-zA-Z ]*$/", $_POST["apellidos"])
    ) {
        echo $_POST["apellidos"] . "<br/>";
    } else {
        echo "No definido :(<br/>";
    }

    $_POST["email"] = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (!empty($_POST["email"]) && preg_match("/^\w+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/", $_POST["email"])) {
        echo $_POST["email"] . "<br/>";
    } else {
        echo "No definido :(<br/>";
    }

    if (!empty($_POST["fecha"])) {
        echo $_POST["fecha"] . "<br/>";
    } else {
        echo "No definido :(<br/>";
    }

    if (!empty($_POST["password"]) && strlen($_POST["password"]) > 6) {
        echo sha1($_POST["password"]);
        echo "<br/>";
    } else {
        echo "No definido :(<br/>";
    }
}

<?php
//Comentario de Modificación de César
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Gracias, $nombre. Hemos recibido tu mensaje al correo: $email.";
    echo "Fecha de recepción: " . date("d/m/Y H:i:s");
    echo "Modificado por Daniel";
} else {
    echo "Método no permitido.";
    echo "Modificado por Daniel";
}
?>

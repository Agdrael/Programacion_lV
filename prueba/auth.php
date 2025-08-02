<?php
//Jairo Villeda 25-1266-2023
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Gracias, $nombre. Hemos recibido tu mensaje al correo: $email.";
} else {
    echo "Método no permitido.";
}
?>

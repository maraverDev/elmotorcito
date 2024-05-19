<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeat_pass = $_POST['repeat-password'];

if ($pass !== $repeat_pass) {
    die("Las contraseñas no coinciden.");
}
//Esto cehckea si esxiste los usaurios en la base de datos.
$checkUser = $conn->prepare("SELECT id FROM usuarios WHERE username=? OR email=?");
$checkUser->bind_param("ss", $user_name, $email);
$checkUser->execute();
$checkUser->store_result();

if ($checkUser->num_rows > 0) {
    header("Location: /elmotorcito/pages/Registro.php?error=El usuario o email ya existe");
    exit;
}

$checkUser->close();
// Hash de la contraseña
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

// Preparar la consulta SQL
$sql = $conn->prepare("INSERT INTO usuarios (username, password, email) VALUES (?, ?, ?)");
$sql->bind_param("sss", $user_name, $pass_hash, $email);

// Ejecutar la consulta
if ($sql->execute()) {
    header("Location: /elmotorcito/Index.php");
    echo "Registro correcto";
} else {
    header("Location: /elmotorcito/pages/Registro.php");
    echo "Error en el registro: " . $conn->error;
}

// Cerrar la sentencia y la conexión
$sql->close();
$conn->close();

?>

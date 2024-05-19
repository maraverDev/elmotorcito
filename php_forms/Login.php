<?php
session_start(); // Iniciar sesión para manejar el estado del usuario.

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión de la base de datos: " . $conn->connect_error);
}

// Recibir los datos del formulario
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];

// Preparamos la consulta SQL para evitar inyecciones SQL //
$sql = $conn->prepare("SELECT * FROM usuarios WHERE username = ?");
$sql->bind_param("s", $user_name);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    // Usuario encontrado
    $row = $result->fetch_assoc();
    // Verificamos si la contraseña coincide con la que tenemos en nuestra base de datos
    if (password_verify($pass, $row["password"])) {
        // Contraseña correcta
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_role'] = $row['rol']; // Almacenar el rol del usuario en la sesión
        if ($row['rol'] === 'admin') {
            header("Location: /elmotorcito/pages/admin-panel.php");
        } else {
            header("Location: /elmotorcito/Index.php");
        }
        exit();

    } else {
        // Contraseña incorrecta
        session_unset(); // Limpiar todas las variables de sesión
        session_destroy(); // Destruir la sesión
        header("Location: /elmotorcito/pages/Login.php?error=1");
        

        exit();
    }
} else {
    // Usuario no encontrado
    session_unset(); // Limpiar todas las variables de sesión
    session_destroy(); // Destruir la sesión
    header("Location: /elmotorcito/pages/Login.php?error=2");
    exit();
}

// Cerramos la conexión y la sentencia preparada.
$sql->close();
$conn->close();

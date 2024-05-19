<?php
session_start(); // Aseguramos que la sesión está iniciada
require_once 'Config.php'; // Asegúrate de tener un archivo que gestione la conexión a la base de datos

// Redirigir si el usuario no es administrador
if (isset($_SESSION['rol'])) {
    header('Location: /elmotorcito/pages/Login.php');
    exit;
}

// Conectar a la base de datos
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Eliminar un usuario
if (isset($_GET['delete_id'])) {
    $delete_id = $conn->real_escape_string($_GET['delete_id']);
    $query = "DELETE FROM usuarios WHERE id = $delete_id";
    if ($conn->query($query)) {
        echo "<p>Usuario eliminado correctamente.</p>";
    } else {
        echo "<p>Error al eliminar usuario.</p>";
    }
}

// Obtener la lista de usuarios
$query = "SELECT id, username, email, rol FROM usuarios";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador</title>
    <style>
        .nostyleAdmin {
            text-decoration: none;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <header>
        <?php
        require_once('Header.php');
        ?>
    </header>
    <center>
        <h1>Panel de Administrador</h1>
    </center>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <th class="nostyleAdmin"><?php echo htmlspecialchars($row['username']); ?></th>
                <th class="nostyleAdmin"><?php echo htmlspecialchars($row['email']); ?></td>
                <th class="nostyleAdmin"><?php echo htmlspecialchars($row['rol']); ?></td>
                <th class="nostyleAdmin"><a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de querer eliminar este usuario?');"><img src="/elmotorcito/images/admin/delete-1487-svgrepo-com.svg" alt="" width="30px"></a></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <footer>
        <?php
        require_once('Footer.php');
        ?>
    </footer>
</body>

</html>
<?php
$conn->close();
?>
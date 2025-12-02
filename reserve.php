<?php
// Banco de dados
$server = "localhost";
$user = "root";
$password = "";
$db = "reservas";

$conn = new mysqli($server, $user, $password, $db);

// Conexão com o SQL
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // validação dos dados
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    // Dados preenchidos de forma correta
    if (empty($data) || empty($hora)) {
        echo "Preencha todos os campos";

    } else {
        if (strtotime($data) === false || strtotime($hora) === false) {
            echo "Hora ou daata inválido";

        } else {
            
            // Inserção de dados no banco
            $stmt = $conn->prepare("INSERT INTO reservas (data, hora) VALUES (?,?)");
            $stmt->bind_param("ss", $data, $hora); // "ss": duas strings

            if ($stmt->execute()) {
                echo "Reserva realizada";

            } else {
                echo "Erro ao reservar: " . $stmt->error;

            }

            $stmt->close();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>

    <!-- Import TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-6 px-4">

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-6">Garanta Sua Reserva Aqui</h2>

    <!-- Mensagens de sucesso ou de erro -->
     <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($data) || empty($hora)) {
            echo '<div class="bg-red-100 text-red-800 p-4 rounded mb-4">Preencha todos os campos</div>';
       } elseif (strtotime($data) === false || strtotime($hora) === false) {
            echo '<div class="bg-red-100 text-red-800 p-4 rounded mb-4">Data ou hora inválido</div>';
        } elseif ($stmt->execute()) {
            echo '<div class="bg-green-100 text-green-800 p-4 rounded mb-4">Reserva realizada</div>';
        }
    }
    ?>

    <form action="reserve.php" method="POST" class="space-4">
        <div>
            <label for="data" class="block text-lg font-medium text-gray-700">Data</label>
            <input type="date" name="data" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label for="hora" class="block text-lg font-medium text-gray-700">Hora</label>
            <input type="time" name="hora" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <button type="submit" class="w-full py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Fazer Reserva</button>
    </form>
</div>

</body>
</html>
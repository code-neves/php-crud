<?php
include "config.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "UPDATE usuarios SET email='$email', senha='$senha' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: lista.php?msg=Data updated successfully");
    exit;
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

$sql = "SELECT * FROM usuarios WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <img src="assets/background.jpg" class="background">

    <main>
        <img src="assets/logo2.svg" alt="logo" class="logo">

        <h1 class="title">Editar usuário</h1>

        <h2 class="sub-title"> Use uma senha forte.</h2>

        <form class="user-input" action="" method="POST">

            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Seu Email</label>
            <input type="email" class="email log" name="email" value="<?php echo $row['email']; ?>">

            <label>Sua senha</label>
            <input type="password" class="senha log" name="senha" required>

            <div class="submit-section">
                <input type="button" value="Cancelar" class="lista-btn" onclick="window.location = 'lista.php';">
                <input type="submit" name="submit" value="Continuar" class="continue-btn">
            </div>
        </form>
    </main>
</body>

</html>

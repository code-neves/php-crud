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
    <!-- Imagem de fundo -->

    <img src="assets/background.jpg" class="background">

    <!-- Aside da esquerda - Apenas vísivel acima de 1200px -->

    <aside><h1 class="aside-title">Aegis</h1> 
        Crie a sua conta hoje.
    </aside>

    <main>
        <!-- Logo do topo -->
        <img src="assets/logo2.svg" alt="logo" class="logo">
        
        <h1 class="title">
            Cadastre-se</h1>

        <h2 class="sub-title">
            Novo usuário? Crie sua conta.</h2>

        <form class="user-input" action="?page=salvar" method="POST">
            <!-- Input invísivel para ativar a função 'acao' -->

            <input type="hidden" name="acao" value="cadastrar">

            <!-- Seção de input - Email e Senha -->

            <label>Seu Email</label>
            <input type="email" class="email log" name="email">
            <label>Sua senha</label>
            <input type="password" class="senha log" name="senha" required>

            <!-- Seção para os botões -->
           <div class="submit-section">

           <input type="button" value="Listagem" class="lista-btn" onclick= "window.location = 'lista.php';"> 
            <input type="submit" value="Continuar" class="continue-btn">

           </div>

        </div>
        
          
    </main>

    <?php
     include("config.php");

         switch(@$_REQUEST["page"]){

            case "salvar":
                include("save.php");
            break;
     
        case "listar":
            include("lista.php");
            break;
        }
     ?>

</body>






</html>
<?php
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'login';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/styles.css?<?php echo time(); ?>">
</head>
<body>

    <div class="tabs">
        <a href="?tab=login" class="tab <?php echo $activeTab === 'login' ? 'active' : ''; ?>">Login</a>
        <a href="?tab=register" class="tab <?php echo $activeTab === 'register' ? 'active' : ''; ?>">Cadastro</a>
        <a href="?tab=profile" class="tab <?php echo $activeTab === 'profile' ? 'active' : ''; ?>">Perfil</a>
        <a href="?tab=delete" class="tab <?php echo $activeTab === 'delete' ? 'active' : ''; ?>">Excluir Conta</a>
    </div>

    <div class="tab-content">
        <?php
        // Lógica para exibir o conteúdo de cada aba
        if ($activeTab === 'login') {
            include('login.php'); 
        } elseif ($activeTab === 'register') {
            include('register.php');
        } elseif ($activeTab === 'profile') {
            include('profile.php');
        } elseif ($activeTab === 'delete') {
            include('delete.php');
        }
        ?>
    </div>

</body>
</html>

<?php
    include ('conection.php');
    
    session_start(); // Inicia a sessão
    
    if(isset($_POST['login'])){
        $emailLogin = $_POST['email'];
        $senha = $_POST['senha'];
    
        $stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :email AND senha = :senha");
        $stmt->bindParam(':email', $emailLogin);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    
        if($stmt->rowCount() > 0){
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["Email"] = $linha['email'];
            $_SESSION["Senha"] = $linha['senha'];
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("Email ou senha inválidos!!!");';
            echo 'window.location.href = "./html/login.html";';
            echo '</script>';
        }
    } else {
        if(!isset($_SESSION["Email"]) || !isset($_SESSION["Senha"])){
            header("Location: login.html");
            exit;
        } else {
            // Usuário logado! Redireciona para a página de cliente
            header("Location: cliente.php");
            exit;
        }
    }
?>
<?php include "database.php"; 

    session_start();

    $usr_Nome = $_POST["nome"];
    $usr_Senha = $_POST["senha"];

    if(empty($usr_Nome))
    {
        $_SESSION['mensagem'] = 'Preencha o campo Nome';
        header("Location: ../form_login.php");
    }
    elseif(empty($usr_Senha))
    {
        $_SESSION['mensagem'] = 'Preencha o campo Senha';
        header("Location: ../form_login.php");
    }

    else
    {
        $sql_Login = "SELECT * FROM usuario  where usr_Nome = '$usr_Nome' AND usr_Senha = '$usr_Senha' ";

        $resultado = mysqli_query($conexao,$sql_Login);

        $dados = mysqli_fetch_array($resultado);

        if($dados['usr_Nome'] == $usr_Nome and $dados['usr_Senha'] == $usr_Senha)
        {
            //Criar u novo array com os dados de usuario
            $usuario = array("login" => $dados['usr_Nome'], "senha" => $dados['usr_senha'], "perfil" => $dados['usr_Nivel'], "foto" => $dados['usr_Foto']);
            //Colocar o array do usuario e sessão
            if($dados['usr_Nivel'] == 2){
                $_SESSION['admin'] = $usuario;
                //Redirecionar para a pagina de verificação
                header("Location: ../dashboard_projeto.php");
            }
            else{
                $_SESSION['usuario'] = $usuario;
                //Redirecionar para a pagina de verificação
                header("Location: ../index.php");
            }
        }
        else
        {
            //Criar uma mensagem de aviso de erro no login ou senha informados
            $_SESSION['mensagem'] = "Login ou Senha incorreto ";
            header("Location: ../form_login.php");
        }
    }
    
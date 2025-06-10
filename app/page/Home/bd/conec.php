<?php
// Este é um exemplo simplificado e não deve ser usado em produção sem melhorias de segurança.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensagem = htmlspecialchars(trim($_POST['mensagem']));

    // Validação básica
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Endereço de e-mail inválido.";
        exit;
    }

    // Aqui você faria algo com os dados, como:
    // 1. Enviar um e-mail:
    $to = "seuemail@example.com"; // Substitua pelo seu email
    $subject = "Nova mensagem do site Futurize de " . $nome;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_content = "
    <html>
    <head>
        <title>Nova Mensagem do Site</title>
    </head>
    <body>
        <p><strong>Nome:</strong> {$nome}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Mensagem:</strong><br>{$mensagem}</p>
    </body>
    </html>
    ";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "Mensagem enviada com sucesso! Em breve entraremos em contato.";
    } else {
        echo "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }

    // 2. Salvar em um banco de dados
    // Ex: require 'conexao_banco.php';
    // Ex: $stmt = $pdo->prepare("INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)");
    // Ex: $stmt->execute([$nome, $email, $mensagem]);

} else {
    echo "Acesso inválido ao script.";
}
?>
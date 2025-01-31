<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $sugestao = $_POST['sugestao'];
    $email_usuario = $_POST['email'];

    // Destinatário do e-mail (seu e-mail)
    $destinatario = "ccorreiacauahe@gmail.com";

    // Assunto do e-mail
    $assunto = "Nova Sugestão Recebida";

    // Montar o corpo do e-mail
    $mensagem = "Você recebeu uma nova sugestão:\n\n";
    $mensagem .= "Sugestão: " . $sugestao . "\n";
    if (!empty($email_usuario)) {
        $mensagem .= "E-mail do usuário: " . $email_usuario . "\n";
    }

    // Cabeçalhos do e-mail
    $headers = "From: no-reply@example.com\r\n";
    $headers .= "Reply-To: $email_usuario\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "Sugestão enviada com sucesso!";
    } else {
        echo "Erro ao enviar a sugestão. Por favor, tente novamente.";
    }
}
?>

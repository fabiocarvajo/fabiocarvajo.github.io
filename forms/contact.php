<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Configurar os cabeçalhos do e-mail
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

  // Corpo do e-mail
  $body = "<h2>Novo e-mail do formulário de contato</h2>";
  $body .= "<p><strong>Nome:</strong> $name</p>";
  $body .= "<p><strong>E-mail:</strong> $email</p>";
  $body .= "<p><strong>Assunto:</strong> $subject</p>";
  $body .= "<p><strong>Mensagem:</strong> $message</p>";

  // Endereço de e-mail de destino
  $to = "fabio.carvalho8@fatec.sp.gov.br";

  // Enviar o e-mail
  if (mail($to, $subject, $body, $headers)) {
    echo "<div class='sent-message'>Seu e-mail foi enviado! Obrigado <i class='bx bxs-heart color'></i></div>";
  } else {
    echo "<div class='error-message'>Ocorreu um erro ao enviar o e-mail.</div>";
  }
}
?>
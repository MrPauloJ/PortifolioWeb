<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['text'];
$email_destinatario = "pier.lon@hotmail.com"; // pode ser qualquer email que receberá as mensagens
$email_assunto = "Contato - Site";
$email_conteudo = "
  <html>
  <style>
  html{background:#ddd;font-family:sans-serif;}
  </style>
  <body>
  Nome = $nome\n
  Email = $email\n
  Mensagem = $mensagem\n
  </body>
  </html>
";
$email_headers ="MIME-Version: 1.1\r\n";
$email_headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$email_headers .= "From: Personal Website\r\n";
if (mail ($email_destinatario, $email_assunto,  nl2br($email_conteudo), $email_headers)){
        header("Location: http://trosleihard.000webhostapp.com/dev#contact");
        }
    else{
        echo "</b>Falha no envio do E-Mail!</b>";
    }


?>

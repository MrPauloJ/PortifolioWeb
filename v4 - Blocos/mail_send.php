<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['text'];
$email_destinatario = "paulinhodafielserio@gmail.com"; // pode ser qualquer email que receberá as mensagens
$email_conteudo = "
Nome = $nome\n
Email = $email\n
Mensagem = $mensagem\n
";

$headers = 'From: Portifolio <no-reply@trosleihard.com>'."\r\n" . // substituir por um email base, evita ir para spam
        'Reply-To:'.$email."\r\n" .
        'X-Mailer: MyFunction/' . phpversion().
        'MIME-Version: 1.0' . "\n".
        'Content-type: text/html; charset=iso-8859-1' . "\r\n";


if (@mail($email_destinatario, "Portifolio - Contato", $email_conteudo,$headers)){
        header("Location: http://trosleihard.000webhostapp.com/dev#contact");
        echo "Email enviado com sucesso !";
        }
else{
    echo "</b>Falha no envio do E-Mail!</b> \n";
    print_r(error_get_last());
}

?>

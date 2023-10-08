<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $destinatario = "lucasbrancalhao454@gmail.com";

    $assunto = "Formulário - Contato";

    $mensagem = "Nome: " .$nome. "\r\n" .
                "Email: " .$email. "\r\n";

    $cabecalho = "From: " .$email. "\r\n" .
                 "Reply-To: ".$email."\r\n" .
                 "X-Mailer: PHP/".phpversion();

    if(mail($destinatario, $assunto, $mensagem, $cabecalho)){
        $resposta = "Obrigado por entrar em contato!";
        mail($email, "Agradeço seu contato", $resposta, $cabecalho);

        echo("Email enviado com sucesso!");
    }else{
        echo("O email não pôde ser enviado");
    }
}
?>

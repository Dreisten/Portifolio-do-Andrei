<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_post['email']);
$telefone = addcslashes($_post['telefone']);

$para = "andreirodrigos@gmail.com";
$assunto = "Contato - Portifolio"

$corpo = "Nome: ".$nome."\n"."email: ".$email."\n".".$telefone."

$cabeca = "From andreirodrigos@gmail.com"."\n"."Reply-to: "<div class="email"."\n". "X=Mailer:PHP/".phpversion()]

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}


?>
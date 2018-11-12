<?php

// Recebendo os dados
$recebenome     = $_POST["nome"];
$recebefone     = $_POST["telefone"];
$recebemail     = $_POST["email"];
$recebeassunto  = $_POST["assunto"];
$recebemsg      = $_POST["mensagem"];

// Definindo os cabeçalhos do e-mail
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type:text/html; charset=utf-8 \n"; 
$headers .= "From: Formulario de contato\n"; 

// Destinatário do email
$para = "To Nilton1 <nilton.nmn@gmail.com>, Nilton2 <nilton@itmoraes.com.br>\r\n";

// Definindo o aspecto da mensagem
$mensagem   = "<h3>De:</h3> - $recebenome;";
$mensagem  .= "<h3>Contato:</h3>";
$mensagem  .= $recebefone.' - E-mail: '.$recebemail;
$mensagem  .= "<p>";
$mensagem  .= "<h5>Assunto:</h5>";
$mensagem  .= $recebeassunto;
$mensagem  .= "<p>";
$mensagem  .= "<h3>Mensagem:</h3>";
$mensagem  .= "<p>";
$mensagem  .= $recebemsg;
$mensagem  .= "</p>";

// Enviando a mensagem para o destinatário
mail($para,'Contato pelo site - de: '.$recebenome,$mensagem,$headers);

// Resposta Automática, preparando o e-mail com a resposta.
$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong>.<p>Agradecemos sua visita ao nosso site e a oportunidade de receber-mos seu contato.
<br />Em breve responderemos sua questão através de correio eletrônico(Email).</p><br><p>OBS.: Não é necessário responder esta mensagem!</p><br>";
$mensagem2 .= "<p>Atenciosamente<br />Nilton Moraes Neto -  ".$empresa."</p>";

// Enviando a resposta sutomática

$envia =  mail($recebemail,"Agradecemos sua visita ao nosso site",$mensagem2,$headers);

// Exibe um alert que a mensagem foi enviada com sucesso.
echo '<script>
                alert("Mesagem enviada com sucesso!");history.go(-1);
          </script>';

?>
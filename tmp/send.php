<?
    $nome = $_POST["nome"];
    $fone = $_POST["fone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $headers="From:$nome<$email>\n"; 
    $headers.="X-Sender:<$email>\n"; 
    $headers.="X-mailer: PHP\n";
    $headers.="X-Priority: 0\n"; 
    $headers.="Return-Path: <$email>\n"; 
    $headers.="Content-Type: text/html; charset=iso-8859-1\n"; 

    $texto = "<b>Contato</b><br>
	 <br><b>Nome:</b>
 	 $nome
	 <br><b>Fone:</b>
    $fone
	 <br><b>E-Mail:</b>
    $email
	 <br><b>Mensagem:</b>
	 $mensagem";

    mail ("leandro@construbarros.com.br","Contato",$texto,$headers);
    header ("location: http://www.sicuressa.com.brm");
?>

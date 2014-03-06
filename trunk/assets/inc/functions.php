<?php

/**
 * Inclue, instancia e envia email.
 * 
 * @param type $emailDes
 * @param type $nomeDes
 * @param type $assunto
 * @param type $menHTML
 * @param type $menTXT
 * @param type $emailRem
 * @param type $nomeRem
 * @param type $anexo
 * @return type bool
 */
function phpMailer($emailDes = '', $nomeDes = '', $assunto = '', $menHTML = '', $menTXT = '', $emailRem = '', $nomeRem = '', $anexo = null) {


    $pathinfo = pathinfo(__FILE__);

    require_once ($pathinfo['dirname'] . '/mailer5/class.phpmailer.php');
	


    $mail = new PHPMailer();

    // SPMT config

    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.clinicacotex.com.br';
    $mail->SMTPAuth = true;
    $mail->Password = "senhauol001";
    $mail->Username = "webmaster@clinicacotex.com.br";
    $mail->SMTPSecure = '';
    $mail->Port = 587;
    $mail->Sender = "webmaster@clinicacotex.com.br"; // <<-- receberá os erros

    if($_SERVER['HTTP_HOST'] == 'localhost') {
        $mail->Host = 'smtp.conceito-online.com.br';
        $mail->SMTPAuth = true;
        $mail->Password = "conceito";
        $mail->Username = "dev@conceito-online.com.br";
        $mail->SMTPSecure = '';
        $mail->Port = 587;
        $mail->Sender = "dev@conceito-online.com.br";
    }



    $mail->From = $emailRem;
    $mail->FromName = utf8_decode($nomeRem);

         
    if($_SERVER['HTTP_HOST'] == 'localhost'){
        $mail->AddAddress('dev@conceito-online.com.br', utf8_decode($nomeDes)); // Quem recebe
    } else {
        $mail->AddAddress($emailDes, utf8_decode($nomeDes)); // Quem recebe
    }

    $mail->AddReplyTo($emailRem, $nomeRem);
    $mail->IsHTML(true); // send as HTML


    $mail->Subject = utf8_decode($assunto);
    $mail->Body = utf8_decode($menHTML);
    $mail->AltBody = utf8_decode($menTXT);

//    mybug($anexo);

    if ($anexo != null) {
        if (is_array($anexo)) {
            $arq = $anexo['tmp_name'];
            $name = utf8_decode($anexo['name']);
        } else {
            $arq = $anexo;
            $name = '';
        }
        $mail->AddAttachment($arq, $name);
    }

    for ($i = 0; $i < 10; $i++) {
        $send = $mail->Send();
        if ($send)
            break;
    }


    if (!$send) {
        // echo "Message was not sent <br>";
        // echo "Mailer Error: " . $mail->ErrorInfo;
        // exit;
        return false;
    } else {
        return true;
    }
}

/**
 * Para execução e exibe variável.
 * 
 * @param type $obj 
 */
function mybug($obj) {

    echo '<pre>';
    var_dump($obj);
    exit;
}

?>
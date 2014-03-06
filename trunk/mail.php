<?php
/*
|==============================================================================
|		MAIL
|------------------------------------------------------------------------------
*/
require_once("config.php");

function redirect($page = '')
{
	header('location: '.$page.'.php');
	exit;
}


// define('SELF', $_SERVER['PHP_SELF']);
// define('FISICPATH', dirname(__FILE__));


// SMTP account --------------------------------
define('SMTPHOST', 'smtp.luisfernandorosati.com.br');
define('SMTPEMAIL', 'autentica@luisfernandorosati.com.br');
define('SMTPPASS', 'email4luis');
define('SMTPPORT', 587); // 587 - 25
define('SMTPENCR', ''); // TSC
 
$type = $_GET['t'];

///////////// TIPO DE FORMULÁRIO /////////////////////

if($type == 'contato'):
	
	$emailDestino = 'contato@luisfernandorosati.com.br';
	
	// dados
	$subject = 'Contato pelo site';
	$nome = trim($_POST['nome']);
	$email = trim($_POST['email']);
	$telefone = trim($_POST['tel']);
	$msg = trim($_POST['mensagem']);	
	
	// salva na session
	$_SESSION['post'] = NULL;
	$_SESSION['post'] = $_POST;
	
	// validação
	if(strlen($nome) == 0){
		$_SESSION['erro']['msg'] = 'Preencha o nome.';
		$_SESSION['erro']['id'] = 1;
		redirect($type);
	} else if(strlen($email) == 0){
		$_SESSION['erro']['msg'] = 'Preencha o e-mail.';
		$_SESSION['erro']['id'] = 1;
		redirect($type);
	} else if(strlen($msg) == 0){
		$_SESSION['erro']['msg'] = 'Deixe sua mensagem.';
		$_SESSION['erro']['id'] = 1;
		redirect($type);
	}
	
	// mensagem
	$mensagem = 'Nome: ' . $nome . '';
	$mensagem .= '<br>' . PHP_EOL;
	$mensagem .= 'E-mail: ' . $email;
	$mensagem .= '<br>' . PHP_EOL;
	$mensagem .= 'Telefone: ' . $telefone;
	$mensagem .= '<br>' . PHP_EOL;
	$mensagem .= '<br><br>' . PHP_EOL . $msg;


endif;// contato



///////////////////// PHP MAILER ////////////////////////////////////
// include PHP Mailer
//require_once('file://///CONCEITO-NOTE-1/www/anestesiacarioca.com.br/trunk/classes/language/phpmailer.lang-br.php');
require_once('assets/inc/mailer5/class.phpmailer.php');

// Instancia o phpMailer e coloca as informações que não mudarão nas interações.
$mail = new PHPMailer();
$mail->SMTPDebug = false;
// autenticação
$mail->Subject = utf8_decode($subject);
$mail->From = SMTPEMAIL;
$mail->FromName = utf8_decode($nome);
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPSecure = SMTPENCR;
$mail->Host = SMTPHOST; // SMTP server
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = SMTPEMAIL; // SMTP username
$mail->Password = SMTPPASS; // SMTP password
$mail->Sender = SMTPEMAIL; // <<-- receberá os erros
$mail->Port = SMTPPORT;
$mail->WordWrap = 50; // Definição de quebra de linha
// // Finaliza instruções do phpmailer -------------------
$mail->Body = utf8_decode($mensagem);
$mail->AltBody = utf8_decode($mensagem);
$mail->AddAddress($emailDestino, utf8_decode($titleSite));
$mail->AddReplyTo($email, utf8_decode($nome)); // informando a quem devemos responder. o mail inserido no formulario
// $mail->AddCC($bcc[0]); 
// $mail->AddCC($bcc[1]); 
// $mail->AddCC($bcc[2]); 
// // Envia e pega resultado -----------------------------
// Não enviou!!!


if (!$mail->Send()) {
	$send = false;
	 echo '<pre>';
	 echo "Mailer Error: " . $mail->ErrorInfo;
      exit;
} else {
	$send = true;
}
// Limpa o endereço e anexos para próximo loop -----------
$mail->ClearAddresses();

/////////////////////////////////// retorna /////////////////////////

if($send){

	$msg = 'Obrigado pelo contato. Responderemos em breve.';
	
	$_SESSION['erro']['msg'] = $msg;
	$_SESSION['erro']['id'] = 0;	
} else {

	$_SESSION['erro']['msg'] = 'Erro ao enviar mensagem. Tente novamente.';
	$_SESSION['erro']['id'] = 2;
}
redirect($type);
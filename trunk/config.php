<?php
session_start();
$servidor = explode(':',$_SERVER['HTTP_HOST']);
if($servidor[0]=='localhost') {
	define("ENVIROMENT", "development");
} else {
  define("ENVIROMENT", "production");
}

/*****************************************
****  INICIALIZA VARIÁVEIS     ***********
******************************************/
$erro = (isset($_SESSION['erro'])) ? $_SESSION['erro'] : array();
unset($_SESSION['erro']);

// se não hove retorno do formulário limpa campos
if(! isset($erro['id']) || (isset($erro['id']) && $erro['id'] == 0) ){
	$_SESSION['post'] = NULL;
}

/*****************************************
****   Funções Úteis           ***********
******************************************/
function debug($var, $print=true){
    echo '<pre>';
    ($print)? print_r($var): var_dump($var);
    exit;
}

function set_value($name){
    if(isset($_SESSION['post'][$name])){
        return $_SESSION['post'][$name];
    } else {
        return '';
    }
}

/*****************************************
****   Funções WordPress       ***********
******************************************/

function is_home() {
  global $p;
  if($p == 'index'):
    return true;
  else:
    return false;
  endif;
}

function is_page($page) {
  global $p;
  if($p == $page):
    return true;
  else:
    return false;
  endif;
}

/*****************************************
****   LOCAL DE INSTALAÇÃO     ***********
******************************************/
$base_url = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
$base_url .= $_SERVER['HTTP_HOST'] . str_replace('//', '/', dirname($_SERVER['SCRIPT_NAME']) . '/');
$base_url = str_replace('\\', '', $base_url);

define('SELF', $_SERVER['PHP_SELF']);
define('FISICPATH', dirname(__FILE__));

/*****************************************
****   DADOS DE CONFIGURAÇÃO   ***********
******************************************/
$titleSite = "Luis Fernando Rosati Rocha";
$emailSite = "contato@luisfernandorosati.com.br";

/*****************************************
****   DADOS DA PÁGINA ATIVA   ***********
******************************************/
$p2 = explode('/', $_SERVER['PHP_SELF']);
$p3 = $p2[count($p2)-1];// última parte
$p = substr($p3, 0, -4);// remove ".php"

// ignora a numeração final das páginas
//if(is_numeric(substr($p, -1)))$p = substr($p, 0, -1);

// *******  CLASSES CSS  ***********************
$classPage = ($p == 'index') ? 'in-home' : 'in-page';
$classPage .= ' ' . 'page-'.$p;


?>
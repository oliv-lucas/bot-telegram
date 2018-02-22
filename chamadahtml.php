<?php

include('simple_html_dom.php');

define('BASE_URL',"http://g1.globo.com/loterias/");
define('URL_MEGA', BASE_URL.'megasena.html');
define('URL_QUINA', BASE_URL.'quina.html');
define('URL_LOTOMANIA', BASE_URL.'lotomania.html');
define('URL_LOTOFACIL', BASE_URL.'lotofacil.html');


function getResult($lottery, $title){
	$out = "Resultado - ".$title;
	if($lottery=="megasena"){
		$out .= parser(URL_MEGA);
	}elseif($lottery=="quina"){
		$out .= parser(URL_QUINA);
	}elseif($lottery=="lotomania"){
		$out .= parser(URL_LOTOMANIA);
	}else{
		$out .= parser(URL_LOTOFACIL);
	}
	return $out;
}
?>
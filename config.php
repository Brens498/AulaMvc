<?php

#Arquivos diretórios raizes
$PastaInterna="ProjetoMVC/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Específicos
define('DIRIMG',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/img/");
define('DIRCSS',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/css/");
define('DIRJS',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/js/");

#Acesso ao BDD

define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");

?>
<?php

use App\Dispatch;

header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");
require_once("../src/traits/TraitUrlParser.php");

// echo DIRIMG;
// echo "<br>";
// echo DIRCSS;
// echo "<br>";
// echo DIRJS;
// echo "<br>";

// use Src\Traits\TraitUrlParser;
// use Src\Classes\ClassRoutes;

#Teste ClassRouter
// class Teste extends ClassRoutes{
//     public function __construct(){
//         $v=$this->getRota();
//         var_dump($v);
//     }
// }
// $new=new Teste();


#teste URLParser
// class Teste{

//     use TraitUrlParser;

//     public function __construct(){
//         $url=$this->parseUrl();
//         var_dump($url);
//     }

// }
// $new=new Teste();

#Teste Dispachante

$Dispatch=new App\Dispatch();

?>
<!-- <img src="<?php echo DIRIMG."EU.jpg"; ?>" alt="" style="width:20%;"> -->
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/25
 * Time: 15:42
 */
//error_reporting(0);
header('Content-type:text/json');

//define('ROOT_PATH',str_replace('\\','/',substr(dirname(__FILE__),0,-3)));
//
//
//$config = "GET  ...\n";
//foreach($_GET as $a){
//    $config .= ($a . "--" . $_GET[$a]) . "\n";
//	}
//$config .= "GET  end...\n";
//$config .= "POST  ...\n";
//foreach($_POST as $a){
//    $config .= ($a . "--" . $_POST[$a]) . "\n";
//}
//$config .= "POST  end...\n";
//if(function_exists('file_put_contents'))
//{
//    file_put_contents(ROOT_PATH.'/ii/config.inc.php',$config);
//}
//else
//{
//    $fp=fopen(ROOT_PATH.'/ii/config.inc.php','w');
//    fwrite($fp,$config);
//    fclose($fp);
//}

$score = !empty($_POST['score']) ? $_POST['score'] : 0;
$array = Array();
$array = array('r' => '90%');

$json = array('y' => $array);

echo 90 ;
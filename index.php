<?php
ini_set('session.gc_maxlifetime', 28800); // 8 * 60 * 60
require "./engine/engine.php";
//====================
/*
$startMemory = memory_get_usage();
$startTime = microtime(true);
require_once __DIR__."/engine/lib/dom.php";
$p = new html();
$p->outer('<html><div></div><table></table><a href="#test"></a></html>');
$inner = "";
  for($i=0; $i<=1000; $i++) {
      $j = $i*2;
      $s = $j*3;
      $k = $s*4;
      $inner.="<tr><td>{$i}</td><td>{$j}</td><td>{$s}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td></tr>\n";
      //$doc->find("table")->find("tr:last-child > td:last-child")->html("done");
  }
  $p->css("table")[0]->inner($inner);
  $ee = $p->css("tr td:last-child");
  foreach($ee as $e) $e->inner("done");

  foreach($ee as $e) {
    $e->inner($e->inner()."<i>123</i>");
    $e->inner("<b>456</b>".$e->inner());
  }
  $p->css("div")[0]->append($ee);

  $a= $p->css("a")[0];
  $at = $a->attrs();

  $at["rel"]="link";
  $a->attrs($at);
  echo $p->outer();


$time = microtime(true) - $startTime;
$memory = memory_get_usage() - $startMemory;

echo $time.'<br>';
echo $memory.'<br>';
echo memory_get_peak_usage().'<br>';
/*
//====================

$startMemory = memory_get_usage();
$startTime = microtime(true);
//require_once __DIR__.'/engine/lib/vendor/autoload.php';
$loader = require __DIR__.'/engine/lib/vendor/autoload.php';
//SymfonyCSSSelector::import('/vendor/Symfony/Component/CssSelector/');

//use ThinkHTML\jQuery\HTML5Parser;

$sessdir = $_SERVER["DOCUMENT_ROOT"]."/uploads/_sess/";
if (!is_dir($sessdir)) mkdir($sessdir,0755,true);
ini_set('display_errors', 1);
session_start([
    "save_path" => $sessdir,
    "gc_probability" => 5,
    "gc_divisor" => 80,
    "gc_maxlifetime" => 100,
    "cookie_lifetime" => 100
]);
ob_start();
$doc = '<!DOCTYPE html><html><table></table></html>';
if (!count($_GET)) {
    require_once __DIR__."/engine/functions.php";
    $app = new wbApp();

    $doc = $app->fromString($doc);
} else if (isset($_GET["ki"])) {
    require_once "/home/var/www/wbengine2/lib/CDom/CDom.php";
    $doc = CDom::fromString($doc);
} else if (isset($_GET["vd"])) {
    $html = $doc;
    $dom = new \DOMDocument;
    $dom->loadHTML('<div></div>');
    $jquery = new jQuery($dom);
    $jquery('div')->append('<span>Hello world</span>');

    die;
}
  $inner = "";
    for($i=0; $i<=1000; $i++) {
        $j = $i*2;
        $s = $j*3;
        $k = $s*4;
        $inner.="<tr><td>{$i}</td><td>{$j}</td><td>{$s}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td><td>{$k}</td></tr>\n";
        //$doc->find("table")->find("tr:last-child > td:last-child")->html("done");
    }
    $doc->find("table")->append($inner);
        unset($inner);
    foreach($doc->find("tr td:last") as $td) $td->html("done");
echo $doc->outerHtml();


$time = microtime(true) - $startTime;
$memory = memory_get_usage() - $startMemory;

echo $time.'<br>';
echo $memory.'<br>';
echo memory_get_peak_usage().'<br>';
*/
?>

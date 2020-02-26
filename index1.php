<?php

require_once __DIR__ . "/engine/functions.php";
ini_set('display_errors', TRUE);

$startMemory = memory_get_usage();
$startTime = microtime(true);

$app = new wbApp();

$Item = $app->ItemRead("test","test");
//$app->ItemSave("users",$Item);

$app->vars->set("_env.settings.i18n","en-En");
$app->vars->set("_env.settings.locale","en-En");
$_SESSION["lang"]=$_ENV["lang"]="ru";


$tpl=<<<DOM
<html>
<head>
<meta data-wb="role=snippet">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
    <div id="target">
      target:
    </div>
    <div data-wb="role=formdata&form=complex&item=5e455e5808ac">
      <!--meta data-wb="role=module&load=yamap" name="geopos1" zoom="10" height="300" width="100%" center="59.918077 30.304899"-->

      <div data-wb="role=module&load=yamap">
        <meta role="geopos" value="50 50">
        <meta role="geopos" value="51 51">
        <meta role="geopos" value="52 52">
      </div>
    </div>

<h1>Inline FroalaEditor with autosave</h1>
<form data-wb="role=formdata&form=test&item=test">
  <span append="#target">MY TARGET</span>
<div data-wb="role=save&form=test&item=test&field=text.t1&editor={{_sett.editor}}" contenteditable>
{{text.t1}}
</div>

<div data-wb="role=save&form=test&item=test&field=text.t2&editor={{_sett.editor}}" contenteditable>
{{text.t2}}
</div>


</form>

<h1>Sample form</h1>
    <form method="post" data-wb='role=formdata&form=test&item=test'>
    <h3>Tree data structure</h3>
    <input data-wb="role=tree&form=admin&item=interface&field=menu" name="roleprop">
    <h3>Multiinput</h3>
    <div data-wb="role=multiinput" name="multi">
        <div class="col"><input name="sdf" placeholder="fld1" class="form-control"></div>
        <div class="col"><select name="dsf" placeholder="fld2" class="form-control"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></div>
    </div>
    <h3>Content editor</h3>
    <meta data-wb='role=module&name=codemirror&theme=dracula&mode=htmlmixed' name="rrrr">

    <meta data-wb='role=snippet&load=editor.php&hide=true' name="rrrr" data-wb-value="rrrr">
    <meta data-wb="role=snippet&load=switch.php&value=active" name="active">
    <div><b><button class="btn btn-primary" data-wb="role=save&form=test&item=test&method=ajax">Save form</button></b></div>

    </form>

<h1>View some tree data</h1>
  <ul data-wb='{
    "role": "tree",
    "form": "test",
    "item": "test",
    "field": "roleprop"
  }'>
  <li data-id='{{id}}'>
      {{name}}
  </li>
  </ul>

<h1>View formdata</h1>
    <div data-wb='role=formdata&form=pages&item=home'>

    Title: <div data-wb="role=save&form=pages&item=home&field=title&editor={{_sett.editor}}" contenteditable>{{title}}</div>
    <br>
    <p>Text: <div style="min-width:10px;" data-wb="role=save&form=pages&item=home&field=text" contenteditable>{{text}}</div></p>
    </div>
        </div>

        <script type="wbapp">
            wbapp.loadScripts([
                "/engine/lib/bootstrap/js/bootstrap.min.js"
            ]);
            wbapp.loadStyles([
                "/engine/lib/bootstrap/css/bootstrap.min.css"
                ,"/engine/css/wbapp.less"
            ]);
        </script>
<script type="text/locale">
[en]
test = "TEST"
[ru]
test = "ТЕСТ"
</script>
</body>
</html>
DOM;
/*
$test=$app->json("pages")->get();
foreach($test as $t) {
    $data[]=$t;
    $i++;
    if ($i>10) break;
}
$multi[0]["sdf"] = 2345;
$multi[0]["dsf"] = 3;

$multi[1]["sdf"] = 22222;
$multi[1]["dsf"] = 2;

$multi[2]["sdf"] = 3333;
$multi[2]["dsf"] = 1;

$multi[3]["sdf"] = 3333;
$multi[3]["dsf"] = 1;

$multi[4]["sdf"] = 3333;
$multi[4]["dsf"] = 1;
*/
$dom=$app->fromString($tpl);
$dom->find("input")->addClass("test");
$dom->fetch(["multi"=>$multi,"data"=>$data,"id"=>"testId","title"=>111]);

echo $dom->outerHtml();

$time = microtime(true) - $startTime;
$memory = memory_get_usage() - $startMemory;

echo $time."<br>";
echo $memory."<br>";
echo memory_get_peak_usage()."<br>";
/*
file_put_contents(__DIR__.'/time.txt', $time . PHP_EOL, FILE_APPEND);
file_put_contents(__DIR__.'/memory.txt', $memory . PHP_EOL, FILE_APPEND);
file_put_contents(__DIR__.'/peak.txt', memory_get_peak_usage() . PHP_EOL, FILE_APPEND);
*/
?>

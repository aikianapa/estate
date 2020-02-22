<?php

$startMemory = memory_get_usage();
$startTime = microtime(true);

require_once __DIR__ . '/engine/functions.php';



die;
ini_set('display_errors', true);

$tpl=<<<DOM

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Filepicker - Multi file uploader</title>

    <!-- CSS -->

    <meta data-wb="role=snippet">
    <meta data-wb="role=snippet&load=fontawesome4">

</head>
<body>


    <div class='container'>



    <form data-wb="role=formdata&form=test&item=image">

        <ul class="list-unstyled" data-wb="role=tree&form=admin&item=interface&field=menu">
            <li class="list-item" data-wb-where='"{{_lvl}}" = "0"'>
              <p class="list-title text-uppercase">{{data.lang.{{_env.lang}}.label}}</p>
            </li>
            <li data-wb-where='"{{_lvl}}" = "1"'>
            {{_lvl}}<a href="{{_route.uri}}" class="list-link"><i class="fa fa-home" aria-hidden="true"></i>{{data.lang.{{_env.lang}}.label}}</a>
            </li>
        </ul>
      <!--meta data-wb="role=module&load=filepicker&name=test" data-wb-path="/uploads/test/"-->
      <button data-wb="role=save&form=test&item=image">Save</button>
    </form>
    </div>

</body>
</html>
DOM;

$app = new wbApp();

$_SESSION['lang']=$_ENV['lang']='en';
$tpl = $app->fromString($tpl);
//echo "<textarea rows=100 style='width:100%'>";
echo $tpl->fetch();
//echo "</textarea>";
//echo $tpl;

$time = microtime(true) - $startTime;
$memory = memory_get_usage() - $startMemory;

echo $time.'<br>';
echo $memory.'<br>';
echo memory_get_peak_usage().'<br>';

?>

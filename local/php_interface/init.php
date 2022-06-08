<?php
define("DEFAULT_TEMPLATE_PATH","/local/templates/.default/");

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
CAgent::AddAgent("cronJob();", "", "Y", 60, "", "Y", "", 100);

    function cronJob(){
        require $_SERVER['DOCUMENT_ROOT']."/import/index.php";
        return "cronJob();";
    }

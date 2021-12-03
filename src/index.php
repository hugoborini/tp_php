<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/bootstrap.php";

$path = explode("/", $_SERVER['REQUEST_URI']);

var_dump($_SESSION["log"]["is_admin"]);

if ($path[1] == "list"){
    include PROJECTPATH . "/view/list.php";

} elseif(preg_match('/Article/', $path[1])){

    if($_SESSION["log"]["is_admin"] == "on"){
        include PROJECTPATH . "/view/article.php";
    } else{
        echo "403";
    }

} elseif($path[1] == "") {
    echo "index";
 
} elseif($path[1] == "login"){
    include PROJECTPATH . "/view/login.php";
}elseif($path[1] == "register"){
    include PROJECTPATH . "/view/register.php";
}

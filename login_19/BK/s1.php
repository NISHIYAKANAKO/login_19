<?php
session_start();

$_SESSION["name"]="テスト〇〇";
$_SESSION["age"]=40;

echo $_SESSION["name"];
echo $_SESSION["age"];

echo session_id(); //SESSION_ID取得に使う

?>
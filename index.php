<?php
$page = file_get_contents('https://www.avito.ru/'.$_SERVER['REQUEST_URI']);
echo $page;
?>
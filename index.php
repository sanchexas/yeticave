<?php
require_once('functions.php');

$page_content = include_template('index.php', [
    'categoryArray'=>$categoryArray,
    'catAssociativeArray'=>$catAssociativeArray]);
$layout_content = include_template('layout.php', [
    'categoryArray'=>$categoryArray,
    'mainContent' => $page_content,
    'pageTitle' => 'Главная страница',
    'is_auth'=>$is_auth,
    'user_name' => $user_name
]);
print($layout_content);
?>

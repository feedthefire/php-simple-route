<?php

$pageMetas = array(
    'home'=>array(
        'title'=>'Mini Route Framework for PHP',
        
    ),

);

$pageMetaDefault = array('title'=>'Mini Route Framework for PHP');

$meta = isset($pageMetas[$page]) ? $pageMetas[$page] : $pageMetaDefault;
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';

?>
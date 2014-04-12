<?php

define('DIR_SEP', DIRECTORY_SEPARATOR);
define('DIR_ROOT', getcwd());
define('DIR_INC', DIR_ROOT.DIR_SEP.'inc'.DIR_SEP);
define('DIR_PG', DIR_ROOT.DIR_SEP.'pg'.DIR_SEP);
define('DIR_TPL', DIR_ROOT.DIR_SEP.'tpl'.DIR_SEP);
define('DIR_PTL', DIR_ROOT.DIR_SEP.'tpl'.DIR_SEP.'ptl'.DIR_SEP);

$meta = array();
$scripts = array();

$request_uri = $_SERVER['REQUEST_URI'];
$path = array_values(array_filter(explode('/',$request_uri)));

$page = empty($path[0])?'home':implode(DIR_SEP,$path);
$page_path = DIR_ROOT.DIR_SEP.'pg'.DIR_SEP.$page;
$page_file = DIR_ROOT.DIR_SEP.'pg'.DIR_SEP.$page.'.php';
$page_index = DIR_ROOT.DIR_SEP.'pg'.DIR_SEP.$page.DIR_SEP.'index.php';
require_once 'inc/meta.php';

$is_ajax = is_ajax();

if(!$is_ajax)
    include DIR_TPL.'header.php';

if(file_exists($page_file))
    include $page_file;
elseif(file_exists($page_index))
    include $page_index;
else
    include DIR_PG.'404.php';

if(!$is_ajax)
    include DIR_TPL.'footer.php';


function is_ajax(){
    $retval = ((isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))?true:false;
    return $retval;
}

function prp($d){
	echo '<pre>';
	print_r($d);
	echo '</pre>';
}

?>
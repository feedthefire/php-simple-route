<?php
if(file_exists($page_file))
    echo "\n\t".'<p>Page File: <br />'.str_replace(DIR_ROOT, '', $page_file).'</p>'."\n";
elseif(file_exists($page_index))
    echo "\n\t".'<p>Directory Index: <br />'.str_replace(DIR_ROOT, '', $page_index).'</p>'."\n";
?>

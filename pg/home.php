<?php

$examples = array(
'/simple/'=>'simple example',
'/index/'=>'index example',
'/a/deep/nested/example/'=>'deep nested example',
'/a/deep/nested/example/another/'=>'another nested example',
'/404/fallback/'=>'404 fallback example'
);

?>
<main id="content-wrap">
    <div class="container">
        <div class="row">
            <div class="one half pad-right">
                <p class="b">Examples:</p>
                <?php
                foreach($examples as $path=>$title){
                    echo "\n\t\t\t\t".'<div><a href="'.$path.'">'.$title.'</a></div>'."\n";
                }
                ?>
            </div>
            <div class="one half pad-left">
                &nbsp;
            </div>
        </div>
    </div>
</main>



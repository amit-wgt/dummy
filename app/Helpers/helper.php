<?php
function pre($array, $die = false)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    if ($die) {
        die();
    }
}

<?php
function buildUrl($index)
{
    $targeturl = "";
    if (defined($index)) {
        //try using the index to get its filepath
        $targeturl = constant($index);
    } else {
        //if the demanded url does not exist as a constant
        //or index is mistyped, replace with 
        //404 page
        $targeturl = constant("404");
    }
    //build the url and return it
    $url = "";
    for ($i = 0; $i < count($targeturl); $i++) {
        $url .= $targeturl[$i];
    }
    return $url;
}

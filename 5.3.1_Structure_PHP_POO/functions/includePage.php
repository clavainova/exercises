function buildUrl($index)
{
    $targeturl = constant($index);
    $url = "";
    for ($i = 0; $i < count($targeturl); $i++) {
        $url .= $targeturl[$i];
    }
    return $url;
}
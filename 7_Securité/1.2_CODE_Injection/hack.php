<p>hack go</p>
<?php
$cookies = array_keys($COOKIE);
foreach ($cookies as $cookie){
    echo $cookie,":",$_COOKIE[$cookie],"<br>";
}
?>
<p>hack end</p>
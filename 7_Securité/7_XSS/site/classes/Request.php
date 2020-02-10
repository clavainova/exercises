<?php

namespace App;

class Request
{
    private $url;
    private $method;
    private $type;
    private $params;

    public function __construct(){
        $this->url = $_SERVER["PHP_SELF"];
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->type = $_SERVER["HTTP_ACCEPT"];
        $this->params = $_REQUEST;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getId() {
        $pos=strripos($this->url, '/');
        if($pos<0) return 0;

        $id=substr($this->url, $pos+1);
        if($id=="index.php") return 0;

        return substr($this->url, $pos+1);
    }

}

?>
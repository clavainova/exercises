<?php
class Page
{
    public $id;
    public $value;
    public $name;
    public $path;
    public $components = array();
    function __construct($id, $value, $name, $path, $components)
    {
        $this->id = $id;
        $this->value = $value;
        $this->name = $name;
        $this->path = $path;
        $this->components = $components;
    }

    function getParam($index)
    {
        return $this->$index;
    }

    function setParam($index, $value)
    {
        $this->$index = $value;
    }

    public function buildPage()
    {
        print "<head><title>" . $this->name . "</title>";
        include $this->components[0]; //head
        print "</head><body>";
        //start at 1 because already embedded the head
        for ($i = 1; $i < count($this->components); $i++) {
            $this->includePage($this->components[$i]);
        }
        print "</body>";
    }

    public function includePage($page)
    {
        if (!include $page) {
            $this->checkStatus($page);
            print "<div class='container-fluid bg-1'><h1>404 Page Not Found</h1></div>";
        }
    }

    public function checkStatus($str)
    {
        if (constant($str) !== null) {
            return;
        } else {
            include 'components/config.php';
        }
    }
}

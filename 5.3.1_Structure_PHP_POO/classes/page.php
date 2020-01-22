<?php
class Page
{
    public $id;
    public $value;
    public $name;
    public $path;
    public $layout;
    public $components = array();
    function __construct($id, $value, $name, $path, $layout, $components)
    {
        $this->id = $id;
        $this->value = $value;
        $this->name = $name;
        $this->path = $path;
        $this->layout = $layout;
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
        print "<head><title>";
        include $this->name;
        print "</title>";
        include $this->components[0];
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
        if (null !== constant($str)) {
            return;
        } else {
            include 'components/config.php';
        }
    }
}

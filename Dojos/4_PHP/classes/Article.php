<?php
class Article
{

    private $id;
    private $title;
    private $text;
    private $img;
    private $category;

    public function __construct($id, $title, $text, $img, $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->img = $img;
        $this->category = $category;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

<?php
class Utilisateur
{
    //this class used to temporarily store users
    //and also to process queries which will then become users in the database
    //compulsory on creation
    private $email;
    private $hash;
    private $username;
    private $type;

    //payment details here

    public function __construct($email, $hash = "", $username="", $type="")
    {
        //print("initialising, email: " . $mail . "<br>pass: " . $pass);
        $this->email = $email;
        $this->hash = $hash;
        $this->username = $username;
        $this->type = $type;
    }

    //ok so this seems like a huge security risk
    //could get hash, username... just about anything.. hmmm
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

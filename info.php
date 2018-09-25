<?php
namespace  testname_01;

class User {

    /**
     * @var int
     */
    public $ID;
    public $name;
    /**
     * @var
     */
    public $path;
    public $setPath;

    public function __construct($setId,$setName,$setPath) {
        $this->ID = $setId;
        $this->name = $setName;
        $this->path = $setPath  ;
    }
    function getOwner() //Unix File Owner
    {
        echo $this->ID . " " . $this->name;
    }
    function getFilesize()  // Dateigröße in Bytes
    {

    }

    /**
     *
     */
    function getFilesizeHuman() // Dateilgröße in lesbarer Form
    {

    }
}
$user_1 = new User(1, "daniel","");
$user_1->printMe();

$user_2 = new User(2, "testuser","");
$user_2->printMe();
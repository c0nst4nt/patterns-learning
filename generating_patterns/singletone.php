<?php
/**
 * Created by PhpStorm.
 * User: sw4n
 * Date: 28.09.15
 * Time: 23:17
 */

ini_set("display_errors",1);

echo "<h1>Singleton</h1>";

Class Preferences{

    private $props = array();
    private static $instance;

    private function __construct(){

    }

    public static function getInstance(){
        if( empty( self::$instance ) ){
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty($key, $val){
        $this->props[$key] = $val;
    }

    public function getProperty($key){
        return $this->props[$key];
    }

    public function __sleep(){
        throw new \Exception("Can't create instance from text!");
    }

    public function __clone(){
        throw new \Exception("Can't create instance via cloning!");
    }

}

/*
//Usual behavior
$pref = Preferences::getInstance();
//$pref->setProperty("name","Иван");

//unset($pref);

$pref2 = Preferences::getInstance();

//print $pref2->getProperty("name");

echo "<pre>";
var_dump($pref);
echo "</pre>";

echo "<pre>";
var_dump($pref2);
echo "</pre>";
*/


/*
//Pack and then unpack the object
$res = serialize(Preferences::getInstance());
$one = unserialize($res);
$second = unserialize($res);

echo "<pre>";
var_dump($one);
echo "</pre>";
echo "<pre>";
var_dump($second);
echo "</pre>";
*/

/*
//Clone object
$res = Preferences::getInstance();
$three = clone Preferences::getInstance();
$four = clone Preferences::getInstance();

echo "<pre>";
var_dump($three);
echo "</pre>";
echo "<pre>";
var_dump($four);
echo "</pre>";
*/
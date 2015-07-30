<?php
/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 30.07.2015
 * Time: 22:45
 */

class  Person {

    private $name;

    private static $count=0;

    /**
     * @return mixed
     */
    public static function getStaticName()
    {
        return self::$count;
    }

    public function __construct($name){

        Person::$count++;

        $this->name=$name;


    }

    public function getName() {

        return $this->name;

    }
}

$vlad=new Person("Vlad");


$vasya=new Person("Vasya");

$personsDto=array($vlad,$vasya);

include "templates/person.view.php";

function bar (){

    $petya=new Person("Hellow");

}
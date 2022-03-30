<?php

//Classes:
/**
notes..!

a way of grouping variables and functions together as single
unit that c an be refference

//Objects

instance of a class

about class/object

you can have as many as you wantand all use the same variables and function names.

    *valuables in classes are called "properties".
    *functions in classes are called "methods".
 **/

class Person{
    var $name;
    var $age;
    var $birthday = false;
    function __construct($name , $age){
        $this ->name = $name;
        $this ->age = $age;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $name
     */
    public function setName( $name )
    {
        $this->name = $name;
    }

    /**
     * @param bool $birthday
     */
    public function setBirthday( $birthday)
    {
        $this->birthday = $birthday;
        $this -> updateAge();
    }
    private function updateAge(){
        $this -> age ($this -> setBirthday) ? ++$this -> age : $this -> age;
    }
}

$Mike = new Person('Mike' , 28);
$Allan = new Person('Allan' , 24);

echo $Mike -> get_name();

<?php 
// Lớp động vật
class Animal 
{
    protected static $_name = '';
     
    public static function setName($name)
    {
        Animal::$_name = $name;
    }
     
    public static function getName(){
        return Animal::$_name;
    }
}
 
class ConHeo extends Animal
{
     
    public static function setName($name) {
        parent::setName($name);
    }
     
}
 
ConHeo::setName('Con Heo');
echo ConHeo::getName();
 ?>
<?php 
// Abstract Class 
abstract class AbstractParentClass
{
    abstract protected function abstractMethod($para, $para1): string ;
}

class ChildClass extends AbstractParentClass
{
    public function abstractMethod($para, $para1) :string
    {
        return $para ." - ".$para1;
    }
}

$absObj = new ChildClass();
//echo $absObj->abstractMethod('Utpal', "Biswas");


//Interface 
/**
 * Interface like abstract
 * interface cant use any property but abstract class can have property
 * all the methods in interface are abstract so do not need to add keyword abstract in interface method
 * Interface methods are only declured child class method will be implemented
 * All of the methods must be implememented in child class
 */

 interface Animal
 {
    function makeSound();
    //function canWalk();
 }

 class Cat implements Animal
 {
    public function makeSound()
    {
        return "Cat can make sound Meaw";
    }
    public function canWalk()
    {
        return "Cat can walk like tiger";
    }
 }
 class Dog implements Animal
 {
    public function makeSound()
    {
        return "Dog can make sound BARK";
    }
    public function canWalk()
    {
        return "Cat can walk like tiger";
    }
 }

 class Cow implements Animal
 {
    public function makeSound()
    {
        return "Cow can make sound HAMBA";
    }
    public function canWalk()
    {
        return "Cat can walk like tiger";
    }
 }
 $cat = new Cat();
 $dog = new Dog();
 $cow = new Cow();

 $aminals = [$cat, $dog, $cow];
 foreach($aminals as $aminal){
    echo $aminal->makeSound(). "<br>";
 }


?>
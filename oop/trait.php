<?php
trait TraitClass
{
    public function messageOne()
    {
        return "This is the message fron first TRAT";
    }
}
trait TraitClassTwo
{
    public function messageTwo()
    {
        return "This is the message fron first TRAT TTWO";
    }
}

class A 
{
    use TraitClass, TraitClassTwo;
}
$classAObj = new A();
echo $classAObj->messageOne()."<br>";
echo $classAObj->messageTwo()."<br>";
?>
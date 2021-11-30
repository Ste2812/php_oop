<?php
//ejercicio 1
class Employee {

private $name;
private $salary;

public function initialize($name, $salary){
    $this->name=$name;
    $this->salary=$salary;


}

function setName($name){
    $this->name=$name;

}
function getName(){
    return $this->name;

}
function setSalary($salary){
    $this->salary=$salary;

}
function getSalary(){
    return $this->salary;

}
public function print(){

    $pay= false;

   
    if($this->salary>=6000){
        echo "El empleado $this->name gana $this->salary, tendrá que pagar impuestos.</br>";
        $pay=true;
    }else{
        echo "El empleado $this->name gana $this->salary, no tendrá que pagar impuestos.</br>";
    }
    return $pay;

}

}


$employee1=new Employee();
$employee1->initialize("juan", 2500);
$employee1->print();
$employee2=new Employee();
$employee2->initialize("Jose", 5000);
$employee2->print();
$employee3=new Employee();
$employee3->initialize("Andrea", 6000);
$employee3->print();

echo "<br>";
echo "<hr>";
//ejercicio 2

class Shape{
    protected $altura;
    protected $base;
    protected $result;
    

    public function __construct($altura, $base){
        
        $this->altura=$altura;
        $this->base=$base;
        
       
        
    }

    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura=$altura;

    }
    public function getBase(){
        return $this->base;

    }
    public function setBase($base){
        $this->base=$base;

    
        
    }
    public function resultado(){
        
       echo $this->result;
 
    }


}
class Triangulo extends Shape{

    public function area(){

    $this->result=($this->base*$this->altura)/2;
    return $this->result;
        
    }
    public function printArea(){
       
       
        echo "El area del triangulo es, ".$this->area().".</br>";       
    }

}

class Rectangulo extends Shape{

    public function area(){

        $this->result=$this->base*$this->altura;
        return $this->result;
    }
        public function printArea(){
        
        echo "El area del rectangulo es, ".$this->area().".</br>";
    }

}
$rectangulo1= new Rectangulo(10, 20);
$rectangulo1->printArea();
$trinangulo1= new Triangulo(12, 23);
$trinangulo1->printArea();

?>
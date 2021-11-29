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
    return $name;

}
function setSalary($salary){
    $this->salary=$salary;

}
function getSalary(){
    return $salary;

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

?>
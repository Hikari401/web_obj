<?php
class University{
    public $uniname="Princr of Songkla University";
    public $deptname;
    public $address="181 Chareonpradit Road Maung Pattani";
    public $postcode="94000";
    public $county="Thailand";
public function __construct($dept){
    $this->deptname=$dept;
}
public function getDeptname(){
    return $this->deptname;
}
public function getAddress(){
    return "address is:".$this->address."".$this->postcode."".$this->county;
}
}
$university1=new University("CIM");
echo $university1->getDeptname();
echo "<br>";
echo $university1->getAddress();

?>
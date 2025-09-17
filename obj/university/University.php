<?php
class university{
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
class Student extends university
{
    var $name;
    var $sex;
    var $age;
    var $faculty; 
    var $major;
    var $yearStart;
    var $yearEnd;
    var $ptime;

    // Constructor (better to use __construct in PHP)
    function __construct($p_name, $p_sex, $p_age)
    {
        $this->name = $p_name;
        $this->sex  = $p_sex;
        $this->age  = $p_age;
    }

    function setName($s_name)
    {
        $this->name = $s_name;
    }
    function setSex($s_sex)
    {
        $this->sex = $s_sex;
    }
    function setAge($s_age)
    {
        $this->age = $s_age;
    }
    function setFaculty($s_faculty)
    {
        $this->faculty = $s_faculty;
    }
    function setMajor($s_major)
    {
        $this->major = $s_major;
    }
    function setYearStart($s_yearStart)
    {
        $this->yearStart = $s_yearStart;
    }
    function setYearEnd($s_yearEnd)
    {
        $this->yearEnd = $s_yearEnd;
    }
    function setPtime($s_ptime)
    {
        $this->ptime = $s_ptime;
    }

    function getName()
    {
        return $this->name;
    }
    function getSex()
    {
        return $this->sex;
    }
    function getAge()
    {
        return $this->age;
    }
    function getFaculty()
    {
        return $this->faculty;
    }
    function getMajor()
    {
        return $this->major;
    }
    function getYearStart()
    {
        return $this->yearStart;
    }
    function getYearEnd()
    {
        return $this->yearEnd;
    }
    function getPtime()
    {
        return $this->ptime;
    }


    function toString() {
        echo "Address is: " . $this->address . " " . $this->postcode . " " . $this->county . "<br>";
        echo $this->name . " (" . $this->sex . "), age " . $this->age .
             " working in faculty of " . $this->faculty . ", major: " . $this->major .
             ", role: " . $this->ptime . "<br>";
}
}
class staff  extends university
{
    var $name;
    var $sex;
    var $age;
    var $faculty; 
    var $major;
    var $role;
    

    // Constructor (better to use __construct in PHP)
    function __construct($p_name, $p_sex, $p_age)
    {
        $this->name = $p_name;
        $this->sex  = $p_sex;
        $this->age  = $p_age;
    }

    function setName($s_name)
    {
        $this->name = $s_name;
    }
    function setSex($s_sex)
    {
        $this->sex = $s_sex;
    }
    function setAge($s_age)
    {
        $this->age = $s_age;
    }
    function setFaculty($s_faculty)
    {
        $this->faculty = $s_faculty;
    }
    function setMajor($s_major)
    {
        $this->major = $s_major;
    }
    function setRole($s_role)
    {
        $this->role = $s_role;
    }

    function getName()
    {
        return $this->name;
    }
    function getSex()
    {
        return $this->sex;
    }
    function getAge()
    {
        return $this->age;
    }
    function getFaculty()
    {
        return $this->faculty;
    }
    function getMajor()
    {
        return $this->major;
    }
    function getRole()
    {
        return $this->role;
    }

   function toString() {
        echo "Address is: " . $this->address . " " . $this->postcode . " " . $this->county . "<br>";
        echo $this->name . " (" . $this->sex . "), age " . $this->age .
             " working in faculty of " . $this->faculty . ", major: " . $this->major .
             ", role: " . $this->role . "<br>";
}
}
?>


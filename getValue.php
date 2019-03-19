

<?php 
require "src/GetValue.php";

if(isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $email = $_POST['email'];

   
}

$result=new GetValue($name,$gender,$province,$email);
echo 'Name:'.$name->getName().'<br>'.'Gender'.$gender->getGender().'Email'.'<br>'.$province->getProvince().'<br>'.$email->getEmail();
echo $result;
<?php declare(strict_types=1);

class User{
    public function cancelPlan(bool|String $immidiate = false ){
        var_dump($immidiate);
    }
}

$user1 = new User();

$user1->cancelPlan();
$user1->cancelPlan(true);
$user1->cancelPlan('next Week'); //bool true
?>


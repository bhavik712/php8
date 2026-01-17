<?php
class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

class Plan{
    public function __construct(public $type){

    }
}

class SignUp{
    public function __construct(protected User $user, protected Plan $plan){

    }

    public function details(){
        echo $this->user->name . 'has a '.$this->plan->type .' plan.';
    }
}

$user = new User('Chirag');
$plan = new Plan('monthly');

$signup = new SignUp($user, $plan);

$signup->details();





?>
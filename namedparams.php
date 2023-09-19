<?php

class Invoice{
    public function __construct(protected $description, protected $amount, protected $date, protected $paid ){

    }
}
//named params used here to increase readability
//alert: name which we are giving as params should exactly match the name declared in the class
$bill1 = new Invoice(
    description: 'Keyboard',
    amount: 1000,
    date: new DateTime(),
    paid: true
);

var_dump($bill1);
?>
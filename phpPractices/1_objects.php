<?php

echo "this sis a php tag <br>";
class product {
    public $name;
    public $price;
     public $description;

     public function discount(){
        $disc = (20/100)*$this-> price;
        return $disc;
     }
        public function net_price(){ 
            $net = $this->price - $this->discount();
            return $net;

        }


}
$sugar = new product();
$salt = new product();

$sugar-> name = "sugar";
$sugar-> price = 12000;
$sugar-> description = "simple description";

$salt-> name = "salt";
$salt-> price = 1000;
$salt-> description = "simple description";


print( "NAME:{$sugar->name} <br>");
print( "PRICE:{$sugar->price} <br>");
print( "discount:{$sugar->discount()} <br>");
print( "netprice:{$sugar->net_price()} <br>");


print( "NAME:{$sugar->description} <br>");

print( "NAME:{$salt->name} <br>");
print( "PRICE:{$salt->price} <br>");
print( "NAME:{$salt->description} <br>");







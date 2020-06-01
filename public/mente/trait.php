<?php

trait ProductTrait{
    public function getProduct(){
        echo 'プロダクト';
    }
}

trait NewsTrait{
    public function getNews(){
        echo 'ニュース';
    }
}

class Product{
    use ProductTrait;
    use NewsTrait;

    public function getInfromation(){
        echo 'クラスでーすぅ';
    }
}

$product = new Product();
$product->getInfromation();
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';

?>
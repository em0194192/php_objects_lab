<?php
    declare(strict_types = 1);
    //Create A Class - name is capitalized by convention
    class Product {
        public string $prod_name;
        public int $price;

        public function calculateTotal (int $qty)
        {
            //notice price has no $ in front and uses $this->
            echo($this->price * $qty); 
        }

        public function prodInfo(): string {
            return "The $this->prod_name is: $" . number_format($this->price,2);
        }
    }

    //Create an instance of the class
    $guitar = new Product();
    
    //Add content to the prod_name and price properties
    $guitar->prod_name = "Guitar";
    $guitar->price = 900;
    //$guitar->calculateTotal(5);
    //echo($guitar->prodInfo());

    //Display the entire object in console
    //print_r($guitar);

    //Practice by making a new object with the same class and populating properties
    $ukulele = new Product();
    $ukulele->prod_name = "Ukulele";
    $ukulele->price = 1500;
  

    //print_r($ukulele);
    //$ukulele->calculateTotal(2);

    //Initialize an empty array
    $products = [];
    
    //Push the objects into the array
    array_push($products, $guitar);
    array_push($products, $ukulele);

    //print the full array
    //print_r($products);

    //use a foreach to loop through products
    foreach($products as $product)
    {
        print_r($product->prodInfo());
    }



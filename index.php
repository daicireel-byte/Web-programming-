‎<!DOCTYPE html>
‎<html>
‎<head>
‎    <meta charset="UTF-8">
‎    <title>PHP Demo - Daiciree Labado</title>
‎</head>
‎<body>
‎
‎<h1>Hello, from Daiciree Labado!</h1>
‎
‎<?php
‎echo "<b>Hello, World!</b><br>";
‎?>
‎
‎<hr>
‎
‎<h2>PHP Variables & Arithmetic</h2>
‎<?php
‎$x = 67;
‎$y = 3;
‎
‎$sum = $x + $y;
‎$difference = $x - $y;
‎$quotient = $x / $y;
‎$product = $x * $y;
‎
‎echo "The sum is $sum.<br>";
‎echo "The difference is $difference.<br>";
‎echo "The quotient is $quotient.<br>";
‎echo "The product is $product.<br>";
‎?>
‎
‎<hr>
‎
‎<h2>Conditional Statement</h2>
‎<?php
‎if ($x % $y == 0) {
‎    echo "$y is a factor of $x.<br>";
‎} else {
‎    echo "$y is not a factor of $x.<br>";
‎}
‎?>
‎
‎<hr>
‎
‎<h2>Loops</h2>
‎<p>Numbers divisible by 3 (1–30):</p>
‎<?php 
‎for ($i = 1; $i <= 30; $i++) {
‎    if ($i % 3 == 0) {
‎        echo "$i ";
‎    }
‎}
‎?>
‎
‎<br><br>
‎<p>Numbers divisible by 5 (1–30):</p>
‎<?php
‎$i = 1;
‎do {
‎    if ($i % 5 == 0) {
‎        echo "$i ";
‎    }
‎    $i++;
‎} while ($i <= 30);
‎?>
‎
‎<br><br>
‎<p>Numbers divisible by 3 (while loop, 1–30):</p>
‎<?php
‎$i = 1;
‎while ($i <= 30) {
‎    if ($i % 3 == 0) {
‎        echo "$i ";
‎    }
‎    $i++;
‎}
‎?>
‎
‎<hr>
‎
‎<h2>Indexed Arrays</h2>
‎<?php
‎$products = array("Product A", "Product B", "Product C");
‎echo "Full array: ";
‎var_dump($products);
‎echo "<br><br>";
‎
‎echo "First product: $products[0]<br><br>";
‎
‎$products[1] = "Product D";
‎echo "Updated array: ";
‎var_dump($products);
‎echo "<br><br>";
‎
‎echo "List of products:<br>";
‎foreach ($products as $p) { 
‎    echo "$p <br>";
‎}
‎?>
‎
‎<hr>
‎
‎<h2>Associative & Multidimensional Arrays</h2>
‎<?php
‎$product = array("name" => "Product A", "price" => 10.50, "stock" => 12);
‎echo "Single product example: " . $product["name"] . "<br><br>";
‎
‎$products = array(
‎    array("name"=>"Product A", "price"=>10.50, "stock"=>12),
‎    array("name"=>"Product B", "price"=>5.60,  "stock"=>7),
‎    array("name"=>"Product C", "price"=>7.50,  "stock"=>5)
‎);
‎
‎foreach ($products as $p) {
‎    echo $p["name"] . " is " . $p["price"] . " pesos<br>";
‎}
‎?>
‎
‎</body>
‎</html>
‎

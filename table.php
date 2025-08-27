‎<!DOCTYPE html>
‎<html lang="en">
‎<head>
‎    <meta charset="UTF-8">
‎    <meta name="viewport" content="width=device-width, initial-scale=1.0">
‎    <title>Dynamic Table - Daiciree Labado</title>
‎    <link rel="stylesheet" href="style.css">
‎</head>
‎<body>
‎
‎<?php
‎$products = array(
‎    array("name"=>"Product A", "price"=>10.50, "stock"=>12),
‎    array("name"=>"Product B", "price"=>5.60,  "stock"=>7),
‎    array("name"=>"Product C", "price"=>7.00,  "stock"=>5),
‎    array("name"=>"Product D", "price"=>12.25, "stock"=>20),
‎    array("name"=>"Product E", "price"=>3.99,  "stock"=>9),
‎    array("name"=>"Product F", "price"=>15.00, "stock"=>2)
‎);
‎?>
‎
‎<h2>Product Inventory</h2>
‎
‎<table>
‎    <tr>
‎        <th>No.</th>
‎        <th>Product Name</th>
‎        <th>Price</th>
‎        <th>Stock</th>
‎    </tr>
‎    <?php
‎    $no = 1;
‎    foreach($products as $p){
‎        $rowClass = ($p["stock"] < 10) ? "low-stock" : "";
‎        echo "<tr class='$rowClass'>";
‎        echo "<td>$no</td>";
‎        echo "<td>".$p["name"]."</td>";
‎        echo "<td>".$p["price"]."</td>";
‎        echo "<td>".$p["stock"]."</td>";
‎        echo "</tr>";
‎        $no++;
‎    }
‎    ?>
‎</table>
‎
‎</body>
‎</html>
‎

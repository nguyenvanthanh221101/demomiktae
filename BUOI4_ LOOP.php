<?php
 // vong lap for
  for($i=0; $i<5; $i++){
      echo "Cont<br>";
  }
  // in mang
  $array1= ['phantu1', 'phantu2', 'phantu3'];
  // cach 1
  for($i=0;$i<count($array1);$i++){
      echo $array1[$i]."<br>";
  }
  // cach 2
  foreach($array1 as $i){
      echo $i."<br>";
  }
  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];
// for mang da chieu
foreach($products as $product){
	echo $product['name'] .' - '. $product['price'];
 	echo '<br />';
}
// vong lap while
$i = 0;
	while($i < count($products)){
		echo $products[$i]['name'];
		echo '<br />';
		$i++;
	}
// source: The Net Ninjas
?>
<!-- step1:フルーツと単価の連想配列を作成してください。 -->
<?php

$fruits = ["りんご" => 300, "みかん" => 150, "桃" => 3000];
$fruits_array = [1, 1, 1];
var_dump($fruits_array);
echo '<br>';
?>

<!-- step2:単価を計算する関数を定義してください。 -->

<?php
$i = 0;

function fruits_sale($fruits , $fruits_array){
$sale = $fruits * $fruits_array ; 
return $sale ;
}

?>

<!-- step3:繰り返しを使ってそれぞれのフルーツを書き出してください。 -->

<?php

foreach ($fruits as $key => $value) {
    echo $key."は".fruits_sale($value , $fruits_array[$i])."円です。";
    $i++;    
   }
echo '<br>';
?>
<!-- step1:フルーツと単価の連想配列を作成してください。 -->
<?php

$fruits = ["りんご" => 300, "みかん" => 150, "桃" => 3000];

$fruits_array = ['りんご' => 0, 'みかん' => 1, '桃' => 2];
var_dump($fruits_array);
echo '<br>';
?>

<!-- step2:単価を計算する関数を定義してください。 -->
<!-- ※リンゴ2個の合計を求めました -->

<?php

$price1 = 300;

function fruits_sale($price1 , $kosu = 2){
$sale = $price1 * $kosu ; 
return $sale. "円";

}

echo fruits_sale($price1);
echo '<br>';
?>

<!-- step3:繰り返しを使ってそれぞれのフルーツを書き出してください。 -->
<!-- ※果物2個の合計を求めました -->

<?php
$i = 0;
$fruits = ["りんご" => 300, "みかん" => 150, "桃" => 3000];

foreach ($fruits as $key => $value) {
    echo $key."は".fruits_sale($value ,  $kosu = 2)."円です。";
     $i++;
     echo '<br>';
   
}

?>
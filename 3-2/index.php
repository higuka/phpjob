<!-- step1:フルーツと単価の連想配列を作成してください。 -->
<?php

$fruits = ["apple" => "リンゴ", "orange" => "みかん", "peach" => "桃"];
$fruitPrise = ["apple" => "300", "orange" => "150", "peach" => "3000"];

echo "{$fruits["apple"]}は{$fruitPrise["apple"]}円です。"."<br />";
echo "{$fruits["orange"]}は{$fruitPrise["orange"]}円です。"."<br />";
echo "{$fruits["peach"]}は{$fruitPrise["peach"]}円です。"."<br />";

?>

<!-- step2:単価を計算する関数を定義してください。 -->
<!-- step3:繰り返しを使ってそれぞれのフルーツを書き出してください。 -->
<!-- ※果物2個の合計を求めました -->

<?php

$fruit_name = ["リンゴ", "みかん", "桃"];

$price1 = 300;
$price2 = 150;
$price3 = 3000;

function furuits_sale($price){
  $sale = $price * 2 ; 
    return $fruit_name."2個の値段は".$sale."円です｡";
}

echo furuits_sale($price1);
echo furuits_sale($price2);
echo furuits_sale($price3);

?>
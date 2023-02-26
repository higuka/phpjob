<link rel="stylesheet" href="style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>


<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
$test1 = $_POST['test1'];

if($test1 == $test1[0]){
	echo "正解！";
}else{
	echo "残念・・・";
}
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
$test2 = $_POST['test2'];

if($test2 == $test2[3]){
	echo "正解！";
}else{
	echo "残念・・・";
}
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
$test3 = $_POST['test3'];

if($test3 == $test3[1]){
	echo "正解！";
}else{
	echo "残念・・・";
}
?>
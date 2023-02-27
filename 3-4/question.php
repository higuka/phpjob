<link rel="stylesheet" href="style.css">
<?php
$my_name = $_POST['my_name'];
//POST送信で送られてきた名前を受け取って変数を作成

//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$ans_test1 = 80;
$ans_test2 = 'HTML';
$ans_test3 = 'select';

?>
<p>お疲れ様です<?php echo $my_name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">


<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
        $test1 = ["80", "22", "20", "21"];
        
    foreach ($test1 as $value) { ?>
    <input name="test1" type="radio" value="<?php echo $value;?>" />
    <?php echo $value;
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
        $test2 = ["PHP","Python","JAVA","HTML"];

    foreach ($test2 as $value) { ?>
    <input name="test2" type="radio" value="<?php echo $value;?>" />
    <?php echo $value;
}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
        $test3 = ["join", "select", "insert", "update"];
        
foreach ($test3 as $value) { ?>
    <input name="test3" type="radio" value="<?php echo $value;?>" />
    <?php echo $value;
}
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

<input type="hidden" name="ans_test1" value="<?php echo $ans_test1; ?>" /> 
<input type="hidden" name="ans_test2" value="<?php echo $ans_test2; ?>" /> 
<input type="hidden" name="ans_test3" value="<?php echo $ans_test3; ?>" /> 
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>" /> <br>
        <input type="submit" value="回答する" />
    </form>
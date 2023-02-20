<?php
// 現在時刻を取得
echo date("Y/m/d", time());
?>
の運勢は

<?php
$my_name = $_POST['my_name'];
?>
<p>選ばれた数字は<?php echo $my_name; ?></p>



<?php
$my_name = rand(0,9);
echo $omikuji;

if ($omikuji === 0) {
          echo "凶";
        } elseif ($omikuji <= 3) {
           echo "小吉";
        } elseif ($omikuji <= 6) {   // 4,5,6
           echo "中吉";             
        } elseif ($omikuji <= 8) {    // 7,8
           echo "吉";                
        } else { 
           echo "大吉";              // 9
        }
  ?>



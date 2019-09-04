<?php

//ピカチュウの設計図が書かれたファイルを読み込む。
require_once('Pikachu.php');
require_once('Homework.php');

//ピカチュウの設計図をもとに実体を作成。
//インスタンス化(new クラス名（）)

$pikachu1 =new Pikachu(100,200);

//クラスをもとに作ったピカチュウの操作
//プロパティとかメソッドとかの使い方

//ピカチュウ1にHP100を設定する
$pikachu1->hp = 100;
//ピカチュウにMP50を設定する
$pikachu1->mp = 50;

//画面にピカチュウのHP、MPを表示
echo 'ピカチュウ１のHPは';
echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウ１のMPは';
echo $pikachu1->mp;
echo '<br>';

//メソッドを実行
//サンダーボルトを実行
$pikachu1->thunderVolt();

//アイアンテールを実行
$pikachu1->ironTail();

//新しいピカチュウを作成
$pikachu2 = new Pikachu(100,1200);
$pikachu2->hp = 2000;
$pikachu2->mp = 2200;

echo 'ピカチュウ2のHPは';
echo $pikachu2->hp;
echo '<br>';

echo 'ピカチュウ２のMPは';
echo $pikachu2->mp;
echo '<br>';


echo '<br>';echo '<br>';

$mewtwo1 = new MewtwoY();
$mewtwo1->hp =100;
echo 'ミュウツーのHPは';
echo $mewtwo1->hp;
echo '<br>';

$mewtwo1->psychokinesis('シゲ','100');


echo '<br>';echo '<br>';
echo 'OOP続き、デフォルトを設定する。ex.HPが設定されていないなど';
echo '<br>';
//ピカチュウ３ 
$pikachu3 = new Pikachu(999,888);

echo 'ピカチュウ３のHPは';
echo $pikachu3->hp;
echo '<br>';

$slime1 = new Slime('slime',24,12);
$slime1->attack('勇者',3);
echo '<br>';



$shop1 = new Shop('Tシャツ',500);
echo $shop1->Item();

echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<br>
<form action="Homework.php" method="post">
  名前：<input type="text" name="name"><br>
  身長：<input type="text" name="height"><br>
  体重：<input type="text" name="weight"><br>
  <input type="submit">
</form>

</body>
</html>

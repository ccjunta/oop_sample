<?php

//関数名:echoHello
//処理：画面にhelloと出力する

function echoHello(){
    echo 'Hello';
}

echoHello();

//echoUserName
//引数名前
//引数に渡された名前を出力

echo '<br>';

function echoUserName($name){
  echo  "私は",$name,"です。";
};

echoUserName("junta");


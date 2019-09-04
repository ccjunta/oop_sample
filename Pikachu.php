<?php

// class クラス名{

//}

//ピカチュウ！の設計図ですよ。
class Pikachu
{
        //属性 プロパティ(変数)
        // -HP
        // ~MP

        //振る舞い；メソッド（関数）
        //~ 10万ボルト
        //~ アイアンテール

    //HP
    public $hp;

    //MP
    public $mp;

    //コンストラクタ　メソッド->引数を与えられる
    //インスタンス化した時に呼ばれる
    //new Pikachu()をした時に呼ばれる。
    public function __construct($hp,$mp){
        echo 'ピカチュウが生まれた';
        echo '<br>';

        //$this:インスタンスのことを指している
        //今回の場合、$thisは生まれたピカチュウ
        $this->hp = $hp;
        $this->mp = $mp;
    }

    //サンダーボルト
    function thunderVolt()
    {
        echo 'サンダーボルトを発動した!';
        echo '<br>';
    }
    //アイアンテール
    function ironTail(){
        echo 'アイアンテールを発動した!';
        echo '<br>';
    }
}

class MewtwoY
{
    public $type;
    public $hp;
    public $attack;
    public $guard;
    public $speed;
    
    function psychokinesis($name,$damage){
        echo 'ミュウツーサイコキネシス！！';
        echo $name.'に'.$damage.'のダメージを与えた';
        echo '<br>';
    }

    function Kiidama(){
        echo 'ミュウツーきあいだま！！';
        echo '<br>';
    }

}




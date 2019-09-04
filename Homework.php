<?php

class Slime
{
    private $type;
    public $hp;
    public $mp;
    public $powar;

    public function __construct($type,$hp,$mp){
        $this->type = $type;
        $this->hp = $hp;
        $this->mp = $mp;
    }

    function attack($name,$damage){
        echo $name.'に'.$damage.'ダメージを与えた。';
    }
}

Class Shop
{
    public $name ;
    public $price ;

    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    public function Item (){
        echo 'アイテム : '.$this->name ;
        echo '値段(税込): '.$this->price * 1.08.'円';
    }
    

}


//   class Human {
//     public $name;
//     public $height;
//     public $weight;
//     function show() {
//       echo "<tr><td>$this->name</td><td>$this->height</td><td>$this->weight</td></tr>";
//     }
//   }

//   session_start();
//   $human = new Human();
//   $human->name = htmlspecialchars($_POST['name']);
//   $human->height = htmlspecialchars($_POST['height']);
//   $human->weight = htmlspecialchars($_POST['weight']);
//   $_SESSION[$human->name] = $human;
// ?>
<!-- <table border="1">
 <tr><th>名前</th><th>身長</th><th>体重</th></tr>
 
//   foreach ($_SESSION as $s) {
//     $s->show();
//   }
// ?>
// </table>
// <a href="object2.html">戻る</a>
-->

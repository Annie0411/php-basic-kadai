<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題16</title>
</head>
<body>
  <p>
    <?php
    //Foodクラスの宣言
    class Food {
      //プロパティを定義
      private $name;
      private $price;

       // コンストラクタを定義
       public function  __construct(string $name,int $price){
        $this -> name = $name;
        $this -> price = $price;
      }
      //メソッドを追加
      public function show_price(){               
        echo $this -> price;
    }
  }
    // // インスタンス化する
    // $food = new Food('potato',250);
    // // インスタンス$userの各プロパティの値を出力する
    // print_r($food);
    // echo '<br>';
    
    //Animalのクラスを定義
    class Animal {
      //プロパティを定義
      private $name;
      private $height;
      private $weight;
      
      // コンストラクタを定義
      public function  __construct(string $name,int $height,int $weight){
        $this -> name = $name;
        $this -> height = $height;
        $this -> weight = $weight;
      }

      //メソッドを追加
      public function show_height(){                  
        echo $this -> height;
     }
    }

    // インスタンス化する
    $food = new Food('potato',250);
    $animal = new Animal('dog',60,5000);
    // インスタンス$userの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    //メソッドを実行
    $food->show_price();
    echo '<br>';
    $animal->show_height();
    echo '<br>';
    ?>
  </p>
</body>
</html>
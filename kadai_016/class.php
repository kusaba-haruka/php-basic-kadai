<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
 <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
            
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;}
         }
         // インスタンス化する
         $Food = new Food('potato',250,);
         // 各プロパティの値を出力する
         print_r($Food);
        
          // クラスを定義する
          class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $price,int $weight) {
               $this->name = $name;
               $this->price = $price;
               $this->weight = $weight;}
            }
            // インスタンス化する
            $Animal = new Animal('dog',60,5000,);
            // 各プロパティの値を出力する
            print_r($Animal);

          
         
         ?>
     </p>
 </body>
 
 </html>




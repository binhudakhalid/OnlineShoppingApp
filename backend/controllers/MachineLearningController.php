<?php

namespace backend\controllers;

use Yii;
use common\models\Product;
use common\models\Order;
use common\models\OrderItem;


class MachineLearningController extends \yii\web\Controller
{  
    
    public function actionIndex()
    {
        $ited=array("a");

$connection = Yii::$app->getDb();
$command = $connection->createCommand("
    SELECT `created_at` FROM `order`");

$result = $command->queryAll();

for($i=0;$i++;$i< sizeof(result)){
$it =  gmdate("Y-m-d\TH:i:s\Z",$result[$i]);
array_push($ited,$it); 

}



$timestamp=1333699439;
echo gmdate("Y-m-d\TH:i:s\Z", $timestamp);


         $products = Product::find()->all();
         $cout = Product::find()->count();
         $order = Order::find()->count();
         $orderprice = OrderItem::find()->sum('price');
       //$orderpriceAr = Order::find()->all();
       $orderpriceAr = Order::find()->select(['created_at'])->all();
     //  $orderpriceAr = Order::model()->findColumn('created_at',);

         // $orderpriceArray = Order::find('created_at')->one();


        return $this->render('index',[

            'products'=>$products,
            'cout'=>$cout,
            'order'=>$order,
            'orderprice' =>$orderprice,
            'orderpriceAr' =>$orderpriceAr,
            'result'=>$result
        ]);

        
    }

}

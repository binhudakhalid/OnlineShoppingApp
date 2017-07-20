<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
?>  
<h1><?php//catalog/view?></h1>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '320px','height' => '220px'])
                     ?></div>
						  <div class="tab-pane" id="pic-2"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '320px','height' => '220px'])
                     ?></div>
                          
						  <div class="tab-pane" id="pic-3"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '320px','height' => '220px'])
                     ?></div>
						  <div class="tab-pane" id="pic-4"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '320px','height' => '220px'])
                     ?></div>
						  <div class="tab-pane" id="pic-5"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '320px','height' => '220px'])
                     ?></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '220px','height' => '120px'])
                     ?></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '220px','height' => '120px'])
                     ?></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '220px','height' => '120px'])
                     ?></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"> <?= Html::img('/yiiiad/backend/web/uploads/' .$model1->picture,
                    ['width' => '220px','height' => '120px'])
                     ?></a></li>
						 
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?= $model1['title'];?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><?= $model1['description'];?></p>
						<h4 class="price">current price: <span><?= $model1['price'];?></span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors: Red, Green, Multicolour
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							
							<?= Html::a('Add to cart', ['cart/add', 'id' => $model1->id], ['class' => 'btn btn-success'])?> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>




<?php
//print_r ( $model1); ?>
<?php
//echo "ID";
//echo $model1['id'];
//echo $model1['title'];
//echo $model1['category_id'];
//echo $model1['description'];
//echo $model1['price'];

  ?>



   
<p>
   
</p>

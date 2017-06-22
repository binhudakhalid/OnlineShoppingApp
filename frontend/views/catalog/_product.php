<?php
use yii\helpers\Html;
use yii\helpers\Markdown;
?>

<?php
if ($index + 1 % 4 == 0 && $index !== 0) {
    echo '<span class="clearfix"></span>';
}
?>

<div class="col-sm-4 well">


<div >
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<!--	<img src="/backend/web/uploads/product3.jpg" alt="" /> !-->
                                    <?= Html::img('/yiiiad/backend/web/uploads/' .$model->picture,
                    ['width' => '320px','height' => '220px'])
                     ?>
										<h2>$<?= $model->price ?></h2>
										<p><?= Html::encode($model->title) ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$<?= $model->price ?></h2>
											<p>Description: <?= Markdown::process($model->description) ?></p>

											<a href="#" >
                                              <?= Html::a('Add to cart', ['cart/add', 'id' => $model->id], ['class' => 'btn btn-success'])?> </a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									<!--	<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								!-->	</ul>
								</div>
							</div>
						
 

   
        </div>
     <!--   <div class="col-sm-8">

        </div>
        !-->
    </div>

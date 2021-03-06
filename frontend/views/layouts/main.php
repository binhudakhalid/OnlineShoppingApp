<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;
use yii\widgets\ListView;




//add material design
//\macgyer\yii2materializecss\assets\MaterializeAsset::register($this);


//AppAsset::register($this);
$assert = frontend\assets\AppAsset::register($this);
$baseUrl = $assert->baseUrl;
 
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="background-color:white;">
    <?php $this->beginBody() ?>
    

<body>
	
		<?php
            NavBar::begin([
              'brandLabel' => '<img src="Shopping-icon.png" style="width:18px;height:18px;">'.'ItwarBAZZAR.com',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $itemsInCart = Yii::$app->cart->getCount();
            $menuItems = [
                ['label' => 'About', 'url' => ['/catalog/about']],
                ['label' => 'Contact', 'url' => ['/catalog/contact']],
                ['label' => 'My cart' . ($itemsInCart ? " ($itemsInCart)" : ''), 'url' => ['/cart/list']],
            ];
            
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
 <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
	<?php echo Yii::$app->request->url;
	//Yii::app()->request->hostInfo . Yii::app()->request->url;
	//echo Yii::$app->request->baseUrl; ?>


<?php if(Yii::$app->request->url == "/yiiiad/frontend/web/index.php" ||Yii::$app->request->url == "/yiiiad/frontend/web/"){
	echo "ok";
	// yeh hata
	echo $content ;
	
}else{

	
	echo "dk"; 
	echo $content ;
}

?>

        <?php //echo$content ?>
        </div>
<?php if(Yii::$app->request->url == "/yiiiad/frontend/web/index.php?r=cart%2Flist"){
	echo "1";
}else{ ?>    
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<?php //echo "base" . $baseUrl; ?>

	
							
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=$baseUrl?>/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=$baseUrl?>/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=$baseUrl?>/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=$baseUrl?>/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?=$baseUrl?>/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
					
					<div class="col-sm-2">
						<div class="single-widget">
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 ItwarBazar Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.myside.com">reserved@</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
<?php } ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

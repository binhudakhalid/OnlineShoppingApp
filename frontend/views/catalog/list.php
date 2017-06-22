<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\grid\GridView;
use yii\widgets\Menu;

/* @var $this yii\web\View */
$title = $category === null ? '' : $category->title;





$this->title = Html::encode($title);
?>
<p>catalog<P>


<h1><?= Html::encode($title) ?></h1>
<?php /*
<img src="3.jpg" alt="Third slide" style="width:304px;height:228px;">
      <img src="3.jpg" alt="Third slide" style="width:304px;height:228px;">
      <img src="1.jpg" alt="Second slide" style="width:304px;height:228px;">
*/ ?>


<<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-c    arousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-ItwarBazar</h1>
									<h2>Top E-Commerce website in Pakistan</h2>
									<p>Buy at Extreme Speed with 100% Quality and Resonable Price. The Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
										<h1><span>E</span>-ItwarBazar</h1>
									<h2>Top E-Commerce website in Karachi</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
										<h1><span>E</span>-ItwarBazar</h1>
									<h2>Top E-Commerce website in Sindh</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->





<div class="alert alert-success">
  <div class="row">
      <div class="col-xs-2">
    
      
             <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><i class="fa fa-bars"></i><a href="#" style=" color: black;font-style: oblique;"><strong>Categories</strong>
          <?= Menu::widget([
              'items' => $menuItems,
              'options' => [
                  'class' => 'menu',
                  
              ],
          ]) ?>
      </div>
      </a></h4>
								</div>
							</div>



      <div class="col-xs-10">
          <?= ListView::widget([
              'dataProvider' => $productsDataProvider,
              'itemView' => '_product',
          ]) ?>
      </div>
  </div>
</div>
<!-- 1711447 -->
<?php
use yii\helpers\Html;

?>

<?=Html::cssFile('@web/time/assets/css/bootstrap.min.css')?>
<?=Html::cssFile('@web/time/assets/css/font-awesome.min.css')?>
<?=Html::cssFile('@web/time/assets/css/style.css')?>

<?=Html::jsFile('@web/time/assets/js/jquery-2.1.0.min.js')?>
<?=Html::jsFile('@web/time/assets/js/modernizr-2.8.0.min.js')?>
<?=Html::jsFile('@web/time/assets/js/jquery.ajaxchimp.min.js')?>
<?=Html::jsFile('@web/time/assets/js/plugins.js')?>
<?=Html::jsFile('@web/time/assets/js/functions.js')?>


<meta charset="UTF-8">
<section id="page-top" class="section-style" data-background-image="http://ww1.sinaimg.cn/large/006tNc79ly1g4xndblbu3j31oy0u07wk.jpg">
	<div class="pattern height-resize">
		<div class="container">
			<h1 class="section-title">
				距离南开大学百年校庆还有
			</h1>
			<h2 class="section-name">
				<span>
					Nankai University's Centennial Celebration
				</span>
			</h2>
			<div id="time_countdown" class="time-count-container">

				<div class="col-sm-3">
					<div class="time-box">
						<div class="time-box-inner dash days_dash animated" data-animation="rollIn" data-animation-delay="300">
							<span class="time-number">
								<span class="digit">0</span>
								<span class="digit">0</span>
								<span class="digit">0</span>
							</span>
							<span class="time-name">Days</span>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="time-box">
						<div class="time-box-inner dash hours_dash animated" data-animation="rollIn" data-animation-delay="600">
							<span class="time-number">
								<span class="digit">0</span>
								<span class="digit">0</span>	
							</span>
							<span class="time-name">Hours</span>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="time-box">
						<div class="time-box-inner dash minutes_dash animated" data-animation="rollIn" data-animation-delay="900">
							<span class="time-number">
								<span class="digit">0</span>
								<span class="digit">0</span>
							</span>
							<span class="time-name">Minutes</span>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="time-box">
						<div class="time-box-inner dash seconds_dash animated" data-animation="rollIn" data-animation-delay="1200">
							<span class="time-number">
								<span class="digit">0</span>
								<span class="digit">0</span>
							</span>
							<span class="time-name">Seconds</span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>


</div>
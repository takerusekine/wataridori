<!--top/indexここから-->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 intro-waseda">
			<div class="flex-container-title">
				<h1 class="intro-title">
					早稲田大学の周辺情報
				</h1>
				<p class="intro-p tm-30">周辺情報や大学の情報をお届けします</p>
			</div>
		</div>
	</div>
</div>
<?php for ($i = 0; $i < 3; $i++): ?>
	<section class="tm-80">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<h2 class="intro-sec-title bm-30">
						<?php
						switch ($i)
						{
							case 0:
								echo '周辺情報';
								break;
							case 1:
								echo 'オススメのお店';
								break;
							case 2:
								echo '先輩インタビュー';
								break;
						}
						?>
					</h2>
					<?php						
					switch ($i)
					{
					case 0:
						echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.6915154850126!2d139.71861581495145!3d35.70920818018778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d1a4869b805%3A0x11e214c5de0808a8!2z5pep56iy55Sw5aSn5a2m!5e0!3m2!1sja!2sjp!4v1456119044339" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>';
								break;
					case 1:
						echo '<p>ドンキホーテ、ラーメン屋、居酒屋などの情報</p>';
						break;
					case 2:
						echo '<p>写真とインタビュー内容</p>';
						break;
					}
					?>
				</div>
			</div>
		</div>
	</section>
<?php endfor; ?>
<!--top/indexここまで-->

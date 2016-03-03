<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<!--		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">-->	<?php echo Asset::css('bootstrap.min.css');?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
	<?php echo Asset::js('bootstrap.min.js');?>
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>-->
		<?php echo Asset::css('main.css'); ?>
	</head>
	<body>
		<div class="container-fluid">
            <div class="row">


				<div class="col-xs-12 topbar-lower">

					<div class="comp pull-left servicetitle">
						<?php echo Html::anchor('top/index', 'ワセベヤ'); ?>
					</div>
<!--					<div class="comp pull-right">
						<?php echo Html::anchor('registraion/index', '新規登録'); ?>
					</div>
					<div class="comp pull-right">
						<?php
						echo html_tag('a', array(
							'href' => 'forowner/index',
							), '<span class="owner">オーナーの方へ</span>');
						?>
					</div>-->
					<div class="comp pull-right">
						<?php echo Html::anchor('top/index', 'ログイン'); ?>
					</div>
<div class="comp pull-right">
						<?php echo Html::anchor('bukkentbl/index', '物件情報'); ?>
					</div>



				</div>
			</div>
		</div> 
		<?php echo $content; ?>

		<div class="footerpadding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<footer class="col-xs-12 footer-title">
							ワセベヤ
						</footer>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>

<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('imgtbl/index','Index');?></li>

</ul>
<p>Index</p>
<?php foreach ($subnav as $value):?>
<p><?php echo $value->img1 ;?></p>
<?php endforeach;?>
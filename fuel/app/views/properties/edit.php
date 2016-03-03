<h2>Editing <span class='muted'>Property</span></h2>
<br>

<?php echo render('properties/_form'); ?>
<p>
	<?php echo Html::anchor('properties/view/'.$property->id, 'View'); ?> |
	<?php echo Html::anchor('properties', 'Back'); ?></p>

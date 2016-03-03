<h2>Viewing <span class='muted'>#<?php echo $bukkenbasic->id; ?></span></h2>

<p>
	<strong>Bukken name:</strong>
	<?php echo $bukkenbasic->bukken_name; ?></p>
<p>
	<strong>Rent:</strong>
	<?php echo $bukkenbasic->rent; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $bukkenbasic->address; ?></p>
<p>
	<strong>Madori:</strong>
	<?php echo $bukkenbasic->madori; ?></p>
<p>
	<strong>Area width:</strong>
	<?php echo $bukkenbasic->area_width; ?></p>
<p>
	<strong>Univ id:</strong>
	<?php echo $bukkenbasic->univ_id; ?></p>
<p>
	<strong>Campus id:</strong>
	<?php echo $bukkenbasic->campus_id; ?></p>
<p>
	<strong>Nearest st1:</strong>
	<?php echo $bukkenbasic->nearest_st1; ?></p>
<p>
	<strong>Nearest st2:</strong>
	<?php echo $bukkenbasic->nearest_st2; ?></p>
<p>
	<strong>Nearest st3:</strong>
	<?php echo $bukkenbasic->nearest_st3; ?></p>
<p>
	<strong>Nearest st4:</strong>
	<?php echo $bukkenbasic->nearest_st4; ?></p>
<p>
	<strong>Nearest st5:</strong>
	<?php echo $bukkenbasic->nearest_st5; ?></p>
<p>
	<strong>From st1:</strong>
	<?php echo $bukkenbasic->from_st1; ?></p>
<p>
	<strong>From st2:</strong>
	<?php echo $bukkenbasic->from_st2; ?></p>
<p>
	<strong>From st3:</strong>
	<?php echo $bukkenbasic->from_st3; ?></p>
<p>
	<strong>From st4:</strong>
	<?php echo $bukkenbasic->from_st4; ?></p>
<p>
	<strong>From st5:</strong>
	<?php echo $bukkenbasic->from_st5; ?></p>
<p>
	<strong>Shikikinn:</strong>
	<?php echo $bukkenbasic->shikikinn; ?></p>
<p>
	<strong>Reikinn:</strong>
	<?php echo $bukkenbasic->reikinn; ?></p>
<p>
	<strong>Comment:</strong>
	<?php echo $bukkenbasic->comment; ?></p>

<?php echo Html::anchor('bukkenbasic/edit/'.$bukkenbasic->id, 'Edit'); ?> |
<?php echo Html::anchor('bukkenbasic', 'Back'); ?>
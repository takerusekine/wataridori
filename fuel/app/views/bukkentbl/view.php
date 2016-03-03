<h2>Viewing <span class='muted'>#<?php echo $bukkentbl->id; ?></span></h2>

<p>
	<strong>Id:</strong>
	<?php echo $bukkentbl->id; ?></p>
<p>
	<strong>Bukken id:</strong>
	<?php echo $bukkentbl->bukken_id; ?></p>
<p>
	<strong>Rent:</strong>
	<?php echo $bukkentbl->rent; ?></p>
<p>
	<strong>Kanrikyoueki:</strong>
	<?php echo $bukkentbl->kanrikyoueki; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $bukkentbl->address; ?></p>
<p>
	<strong>Roomstair:</strong>
	<?php echo $bukkentbl->roomstair; ?></p>
<p>
	<strong>Allstair:</strong>
	<?php echo $bukkentbl->allstair; ?></p>
<p>
	<strong>Shikikin:</strong>
	<?php echo $bukkentbl->shikikin; ?></p>
<p>
	<strong>Reikin:</strong>
	<?php echo $bukkentbl->reikin; ?></p>
<p>
	<strong>Hoshokin:</strong>
	<?php echo $bukkentbl->hoshokin; ?></p>
<p>
	<strong>Shikibiki shoukyaku:</strong>
	<?php echo $bukkentbl->shikibiki_shoukyaku; ?></p>
<p>
	<strong>Bukken type:</strong>
	<?php echo $bukkentbl->bukken_type; ?></p>
<p>
	<strong>Madori:</strong>
	<?php echo $bukkentbl->madori; ?></p>
<p>
	<strong>Chikunen:</strong>
	<?php echo $bukkentbl->chikunen; ?></p>
<p>
	<strong>Area width:</strong>
	<?php echo $bukkentbl->area_width; ?></p>
<p>
	<strong>Univ id:</strong>
	<?php echo $bukkentbl->univ_id; ?></p>
<p>
	<strong>Campus id:</strong>
	<?php echo $bukkentbl->campus_id; ?></p>
<p>
	<strong>Near st1:</strong>
	<?php echo $bukkentbl->near_st1; ?></p>
<p>
	<strong>Near st2:</strong>
	<?php echo $bukkentbl->near_st2; ?></p>
<p>
	<strong>Near st3:</strong>
	<?php echo $bukkentbl->near_st3; ?></p>
<p>
	<strong>Near st4:</strong>
	<?php echo $bukkentbl->near_st4; ?></p>
<p>
	<strong>Near st5:</strong>
	<?php echo $bukkentbl->near_st5; ?></p>
<p>
	<strong>From st1:</strong>
	<?php echo $bukkentbl->from_st1; ?></p>
<p>
	<strong>From st2:</strong>
	<?php echo $bukkentbl->from_st2; ?></p>
<p>
	<strong>From st3:</strong>
	<?php echo $bukkentbl->from_st3; ?></p>
<p>
	<strong>From st4:</strong>
	<?php echo $bukkentbl->from_st4; ?></p>
<p>
	<strong>From st5:</strong>
	<?php echo $bukkentbl->from_st5; ?></p>
<p>
	<strong>Comment:</strong>
	<?php echo $bukkentbl->comment; ?></p>
<p>
	<strong>Created at:</strong>
	<?php echo $bukkentbl->created_at; ?></p>
<p>
	<strong>Updated at:</strong>
	<?php echo $bukkentbl->updated_at; ?></p>

<?php echo Html::anchor('bukkentbl/edit/'.$bukkentbl->id, 'Edit'); ?> |
<?php echo Html::anchor('bukkentbl', 'Back'); ?>
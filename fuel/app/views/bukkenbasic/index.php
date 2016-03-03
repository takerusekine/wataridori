<h2>Listing <span class='muted'>Bukkenbasics</span></h2>
<br>
<?php if ($bukkenbasics): ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Bukken name</th>
				<th>Rent</th>
				<th>Address</th>
				<th>Madori</th>
				<th>Area width</th>
				<th>Univ id</th>
				<th>Campus id</th>
				<th>Nearest st1</th>
				<th>Nearest st2</th>
				<th>Nearest st3</th>
				<th>Nearest st4</th>
				<th>Nearest st5</th>
				<th>From st1</th>
				<th>From st2</th>
				<th>From st3</th>
				<th>From st4</th>
				<th>From st5</th>
				<th>Shikikinn</th>
				<th>Reikinn</th>
				<th>Comment</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($bukkenbasics as $item): ?>		<tr>

					<td><?php echo $item->bukken_name; ?></td>
					<td><?php echo $item->rent; ?></td>
					<td><?php echo $item->address; ?></td>
					<td><?php echo $item->madori; ?></td>
					<td><?php echo $item->area_width; ?></td>
					<td><?php echo $item->univ_id; ?></td>
					<td><?php echo $item->campus_id; ?></td>
					<td><?php echo $item->nearest_st1; ?></td>
					<td><?php echo $item->nearest_st2; ?></td>
					<td><?php echo $item->nearest_st3; ?></td>
					<td><?php echo $item->nearest_st4; ?></td>
					<td><?php echo $item->nearest_st5; ?></td>
					<td><?php echo $item->from_st1; ?></td>
					<td><?php echo $item->from_st2; ?></td>
					<td><?php echo $item->from_st3; ?></td>
					<td><?php echo $item->from_st4; ?></td>
					<td><?php echo $item->from_st5; ?></td>
					<td><?php echo $item->shikikinn; ?></td>
					<td><?php echo $item->reikinn; ?></td>
					<td><?php echo $item->comment; ?></td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php echo Html::anchor('bukkenbasic/view/' . $item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('bukkenbasic/edit/' . $item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('bukkenbasic/delete/' . $item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
						</div>

					</td>
				</tr>
			<?php endforeach; ?>	</tbody>
	</table>

<?php else: ?>
	<p>No Bukkenbasics.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('bukkenbasic/create', 'Add new Bukkenbasic', array('class' => 'btn btn-success')); ?>

</p>

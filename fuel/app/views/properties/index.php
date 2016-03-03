<h2>Listing <span class='muted'>Properties</span></h2>
<br>
<?php if ($properties): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Address</th>
			<th>Kanri kyoueki</th>
			<th>Near st1</th>
			<th>Near st2</th>
			<th>Near st3</th>
			<th>Near st4</th>
			<th>Near st1</th>
			<th>From st1</th>
			<th>From st2</th>
			<th>From st3</th>
			<th>From st4</th>
			<th>From st5</th>
			<th>Univ id</th>
			<th>Campus id</th>
			<th>All stair</th>
			<th>Bukken type</th>
			<th>Chikunennsuu</th>
			<th>Comment</th>
			<th>Search wd</th>
			<th>Img url1</th>
			<th>Img url2</th>
			<th>Img url3</th>
			<th>Img url4</th>
			<th>Img url5</th>
			<th>Img url6</th>
			<th>Img url7</th>
			<th>Img url8</th>
			<th>Img url9</th>
			<th>Img url10</th>
			<th>Img url11</th>
			<th>Img url12</th>
			<th>Img url13</th>
			<th>Img url14</th>
			<th>Img url15</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($properties as $item): ?>		<tr>

			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->kanri_kyoueki; ?></td>
			<td><?php echo $item->near_st1; ?></td>
			<td><?php echo $item->near_st2; ?></td>
			<td><?php echo $item->near_st3; ?></td>
			<td><?php echo $item->near_st4; ?></td>
			<td><?php echo $item->near_st1; ?></td>
			<td><?php echo $item->from_st1; ?></td>
			<td><?php echo $item->from_st2; ?></td>
			<td><?php echo $item->from_st3; ?></td>
			<td><?php echo $item->from_st4; ?></td>
			<td><?php echo $item->from_st5; ?></td>
			<td><?php echo $item->univ_id; ?></td>
			<td><?php echo $item->campus_id; ?></td>
			<td><?php echo $item->all_stair; ?></td>
			<td><?php echo $item->bukken_type; ?></td>
			<td><?php echo $item->chikunennsuu; ?></td>
			<td><?php echo $item->comment; ?></td>
			<td><?php echo $item->search_wd; ?></td>
			<td><?php echo $item->img_url1; ?></td>
			<td><?php echo $item->img_url2; ?></td>
			<td><?php echo $item->img_url3; ?></td>
			<td><?php echo $item->img_url4; ?></td>
			<td><?php echo $item->img_url5; ?></td>
			<td><?php echo $item->img_url6; ?></td>
			<td><?php echo $item->img_url7; ?></td>
			<td><?php echo $item->img_url8; ?></td>
			<td><?php echo $item->img_url9; ?></td>
			<td><?php echo $item->img_url10; ?></td>
			<td><?php echo $item->img_url11; ?></td>
			<td><?php echo $item->img_url12; ?></td>
			<td><?php echo $item->img_url13; ?></td>
			<td><?php echo $item->img_url14; ?></td>
			<td><?php echo $item->img_url15; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('properties/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('properties/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('properties/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Properties.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('properties/create', 'Add new Property', array('class' => 'btn btn-success')); ?>

</p>

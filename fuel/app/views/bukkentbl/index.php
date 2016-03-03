<h2>Listing <span class='muted'>Bukkentbls</span></h2>
<br>

<?php if ($bukkentbls): ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-9">


				<?php foreach ($bukkentbls as $item): ?>		
					<div class="row">
						<div class="col-xs-12 tpad-20 bpad-20 t-border">
							<div class="col-xs-12 tm-10 bm-10">
								<?php echo Html::anchor('bukkentbl/view/' . $item->id, $item->bukken_name, array('class' => 'bukken-title')); ?>
							</div>
							<div class="col-xs-3">
 
							</div>
							<div class="col-xs-9">
								<div class="table-area">


									<table class="bukken-table">
										<tbody class="bukken-body">
											<tr>
												<td>
													<div class="rent">
														<?php echo $item->rent; ?>円
													</div>
													<div>管理費・共益費<?php echo $item->kanrikyoueki; ?>円</div>
												</td>
												<td>
													<div class="shikikin">
														<?php echo $item->shikikin; ?>円
													</div>
													<div class="reikin tm-10">
														<?php echo $item->reikin; ?>円
													</div>
													<div class="tm-10">
														<span class="pr-10">保証金</span><?php echo $item->hoshokin; ?>
													</div>
													<div class="tm-10">
														<span class="pr-10">敷引・償却</span><?php echo $item->shikibiki_shoukyaku; ?>
													</div>
												</td>
												<td>
													<div><?php echo $item->madori; ?></div>
													<div class="tm-10"><?php echo $item->area_width; ?>m<sup>2</sup></div>
												</td>
												<td>
													<div><?php echo $item->bukken_type; ?></div>
													<div class="tm-10">築<?php echo $item->chikunen; ?>年</div>
												</td>
												<td>
													<div><?php echo $item->address; ?></div>
												</td>
											</tr>
										</tbody>
									</table>

								</div>


								<div class="col-xs-6">
									<div class="tm-5">最寄駅</div>
									<div class="tm-5"><?php echo $item->near_st1; ?></div>
									<?php if(!is_null($item->near_st2))
									{
										echo '<div class="tm-5">'.$item->near_st2."</div>";
									}
									
									 if(!is_null($item->near_st3))
									{
										echo '<div class="tm-5">'.$item->near_st3."</div>";
									}
									if(!is_null($item->near_st4))
									{
										echo '<div class="tm-5">'.$item->near_st4."</div>";
									}
									if(!is_null($item->near_st5))
									{
										echo '<div class="tm-5">'. $item->near_st5 ."</div>";
									}?>
									
									
								</div>
								<div class="col-xs-6">
									<div class="tm-5">お問い合わせ</div>
									
								</div>
								<div class="col-xs-12">
									<?php echo Html::anchor('bukkentbl/view/' . $item->id, 'お問い合わせ', array('class' => 'btn btn-info btn-lg pull-right')); ?>
									<?php echo Html::anchor('bukkentbl/view/' . $item->id, '詳細を見る', array('class' => 'btn btn-success btn-lg pull-right mr-10')); ?>
								</div>
								
							</div>
						</div>
					
						


					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


<?php else: ?>
	<p>No Bukkentbls.</p>

<?php endif; ?>
<!--	<p>
	<?php echo Html::anchor('bukkentbl/create', 'Add new Bukkentbl', array('class' => 'btn btn-success')); ?>

</p>-->

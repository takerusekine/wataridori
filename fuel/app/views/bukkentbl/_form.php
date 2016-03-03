<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Id', 'id', array('class'=>'control-label')); ?>

				<?php echo Form::input('id', Input::post('id', isset($bukkentbl) ? $bukkentbl->id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Bukken id', 'bukken_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('bukken_id', Input::post('bukken_id', isset($bukkentbl) ? $bukkentbl->bukken_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bukken id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Rent', 'rent', array('class'=>'control-label')); ?>

				<?php echo Form::input('rent', Input::post('rent', isset($bukkentbl) ? $bukkentbl->rent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Rent')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Kanrikyoueki', 'kanrikyoueki', array('class'=>'control-label')); ?>

				<?php echo Form::input('kanrikyoueki', Input::post('kanrikyoueki', isset($bukkentbl) ? $bukkentbl->kanrikyoueki : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Kanrikyoueki')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($bukkentbl) ? $bukkentbl->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Roomstair', 'roomstair', array('class'=>'control-label')); ?>

				<?php echo Form::input('roomstair', Input::post('roomstair', isset($bukkentbl) ? $bukkentbl->roomstair : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Roomstair')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Allstair', 'allstair', array('class'=>'control-label')); ?>

				<?php echo Form::input('allstair', Input::post('allstair', isset($bukkentbl) ? $bukkentbl->allstair : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Allstair')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Shikikin', 'shikikin', array('class'=>'control-label')); ?>

				<?php echo Form::input('shikikin', Input::post('shikikin', isset($bukkentbl) ? $bukkentbl->shikikin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Shikikin')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Reikin', 'reikin', array('class'=>'control-label')); ?>

				<?php echo Form::input('reikin', Input::post('reikin', isset($bukkentbl) ? $bukkentbl->reikin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Reikin')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hoshokin', 'hoshokin', array('class'=>'control-label')); ?>

				<?php echo Form::input('hoshokin', Input::post('hoshokin', isset($bukkentbl) ? $bukkentbl->hoshokin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hoshokin')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Shikibiki shoukyaku', 'shikibiki_shoukyaku', array('class'=>'control-label')); ?>

				<?php echo Form::input('shikibiki_shoukyaku', Input::post('shikibiki_shoukyaku', isset($bukkentbl) ? $bukkentbl->shikibiki_shoukyaku : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Shikibiki shoukyaku')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Bukken type', 'bukken_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('bukken_type', Input::post('bukken_type', isset($bukkentbl) ? $bukkentbl->bukken_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bukken type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Madori', 'madori', array('class'=>'control-label')); ?>

				<?php echo Form::input('madori', Input::post('madori', isset($bukkentbl) ? $bukkentbl->madori : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Madori')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Chikunen', 'chikunen', array('class'=>'control-label')); ?>

				<?php echo Form::input('chikunen', Input::post('chikunen', isset($bukkentbl) ? $bukkentbl->chikunen : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chikunen')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Area width', 'area_width', array('class'=>'control-label')); ?>

				<?php echo Form::input('area_width', Input::post('area_width', isset($bukkentbl) ? $bukkentbl->area_width : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Area width')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Univ id', 'univ_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('univ_id', Input::post('univ_id', isset($bukkentbl) ? $bukkentbl->univ_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Univ id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Campus id', 'campus_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('campus_id', Input::post('campus_id', isset($bukkentbl) ? $bukkentbl->campus_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Campus id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st1', 'near_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st1', Input::post('near_st1', isset($bukkentbl) ? $bukkentbl->near_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st2', 'near_st2', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st2', Input::post('near_st2', isset($bukkentbl) ? $bukkentbl->near_st2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st3', 'near_st3', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st3', Input::post('near_st3', isset($bukkentbl) ? $bukkentbl->near_st3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st4', 'near_st4', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st4', Input::post('near_st4', isset($bukkentbl) ? $bukkentbl->near_st4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st5', 'near_st5', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st5', Input::post('near_st5', isset($bukkentbl) ? $bukkentbl->near_st5 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st5')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st1', 'from_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st1', Input::post('from_st1', isset($bukkentbl) ? $bukkentbl->from_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st2', 'from_st2', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st2', Input::post('from_st2', isset($bukkentbl) ? $bukkentbl->from_st2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st3', 'from_st3', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st3', Input::post('from_st3', isset($bukkentbl) ? $bukkentbl->from_st3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st4', 'from_st4', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st4', Input::post('from_st4', isset($bukkentbl) ? $bukkentbl->from_st4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st5', 'from_st5', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st5', Input::post('from_st5', isset($bukkentbl) ? $bukkentbl->from_st5 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st5')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Comment', 'comment', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('comment', Input::post('comment', isset($bukkentbl) ? $bukkentbl->comment : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Created at', 'created_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('created_at', Input::post('created_at', isset($bukkentbl) ? $bukkentbl->created_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Created at')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Updated at', 'updated_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('updated_at', Input::post('updated_at', isset($bukkentbl) ? $bukkentbl->updated_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Updated at')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
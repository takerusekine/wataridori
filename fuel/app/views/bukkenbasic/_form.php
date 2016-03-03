<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Bukken name', 'bukken_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('bukken_name', Input::post('bukken_name', isset($bukkenbasic) ? $bukkenbasic->bukken_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bukken name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Rent', 'rent', array('class'=>'control-label')); ?>

				<?php echo Form::input('rent', Input::post('rent', isset($bukkenbasic) ? $bukkenbasic->rent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Rent')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($bukkenbasic) ? $bukkenbasic->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Madori', 'madori', array('class'=>'control-label')); ?>

				<?php echo Form::input('madori', Input::post('madori', isset($bukkenbasic) ? $bukkenbasic->madori : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Madori')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Area width', 'area_width', array('class'=>'control-label')); ?>

				<?php echo Form::input('area_width', Input::post('area_width', isset($bukkenbasic) ? $bukkenbasic->area_width : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Area width')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Univ id', 'univ_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('univ_id', Input::post('univ_id', isset($bukkenbasic) ? $bukkenbasic->univ_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Univ id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Campus id', 'campus_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('campus_id', Input::post('campus_id', isset($bukkenbasic) ? $bukkenbasic->campus_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Campus id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nearest st1', 'nearest_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('nearest_st1', Input::post('nearest_st1', isset($bukkenbasic) ? $bukkenbasic->nearest_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Nearest st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nearest st2', 'nearest_st2', array('class'=>'control-label')); ?>

				<?php echo Form::input('nearest_st2', Input::post('nearest_st2', isset($bukkenbasic) ? $bukkenbasic->nearest_st2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Nearest st2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nearest st3', 'nearest_st3', array('class'=>'control-label')); ?>

				<?php echo Form::input('nearest_st3', Input::post('nearest_st3', isset($bukkenbasic) ? $bukkenbasic->nearest_st3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Nearest st3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nearest st4', 'nearest_st4', array('class'=>'control-label')); ?>

				<?php echo Form::input('nearest_st4', Input::post('nearest_st4', isset($bukkenbasic) ? $bukkenbasic->nearest_st4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Nearest st4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nearest st5', 'nearest_st5', array('class'=>'control-label')); ?>

				<?php echo Form::input('nearest_st5', Input::post('nearest_st5', isset($bukkenbasic) ? $bukkenbasic->nearest_st5 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Nearest st5')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st1', 'from_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st1', Input::post('from_st1', isset($bukkenbasic) ? $bukkenbasic->from_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st2', 'from_st2', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st2', Input::post('from_st2', isset($bukkenbasic) ? $bukkenbasic->from_st2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st3', 'from_st3', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st3', Input::post('from_st3', isset($bukkenbasic) ? $bukkenbasic->from_st3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st4', 'from_st4', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st4', Input::post('from_st4', isset($bukkenbasic) ? $bukkenbasic->from_st4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st5', 'from_st5', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st5', Input::post('from_st5', isset($bukkenbasic) ? $bukkenbasic->from_st5 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st5')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Shikikinn', 'shikikinn', array('class'=>'control-label')); ?>

				<?php echo Form::input('shikikinn', Input::post('shikikinn', isset($bukkenbasic) ? $bukkenbasic->shikikinn : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Shikikinn')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Reikinn', 'reikinn', array('class'=>'control-label')); ?>

				<?php echo Form::input('reikinn', Input::post('reikinn', isset($bukkenbasic) ? $bukkenbasic->reikinn : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Reikinn')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Comment', 'comment', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('comment', Input::post('comment', isset($bukkenbasic) ? $bukkenbasic->comment : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($property) ? $property->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Kanri kyoueki', 'kanri_kyoueki', array('class'=>'control-label')); ?>

				<?php echo Form::input('kanri_kyoueki', Input::post('kanri_kyoueki', isset($property) ? $property->kanri_kyoueki : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Kanri kyoueki')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st1', 'near_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st1', Input::post('near_st1', isset($property) ? $property->near_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st2', 'near_st2', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st2', Input::post('near_st2', isset($property) ? $property->near_st2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st3', 'near_st3', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st3', Input::post('near_st3', isset($property) ? $property->near_st3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st4', 'near_st4', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st4', Input::post('near_st4', isset($property) ? $property->near_st4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Near st1', 'near_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('near_st1', Input::post('near_st1', isset($property) ? $property->near_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Near st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st1', 'from_st1', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st1', Input::post('from_st1', isset($property) ? $property->from_st1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st2', 'from_st2', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st2', Input::post('from_st2', isset($property) ? $property->from_st2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st3', 'from_st3', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st3', Input::post('from_st3', isset($property) ? $property->from_st3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st4', 'from_st4', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st4', Input::post('from_st4', isset($property) ? $property->from_st4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('From st5', 'from_st5', array('class'=>'control-label')); ?>

				<?php echo Form::input('from_st5', Input::post('from_st5', isset($property) ? $property->from_st5 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'From st5')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Univ id', 'univ_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('univ_id', Input::post('univ_id', isset($property) ? $property->univ_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Univ id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Campus id', 'campus_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('campus_id', Input::post('campus_id', isset($property) ? $property->campus_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Campus id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('All stair', 'all_stair', array('class'=>'control-label')); ?>

				<?php echo Form::input('all_stair', Input::post('all_stair', isset($property) ? $property->all_stair : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'All stair')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Bukken type', 'bukken_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('bukken_type', Input::post('bukken_type', isset($property) ? $property->bukken_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Bukken type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Chikunennsuu', 'chikunennsuu', array('class'=>'control-label')); ?>

				<?php echo Form::input('chikunennsuu', Input::post('chikunennsuu', isset($property) ? $property->chikunennsuu : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chikunennsuu')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Comment', 'comment', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('comment', Input::post('comment', isset($property) ? $property->comment : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Search wd', 'search_wd', array('class'=>'control-label')); ?>

				<?php echo Form::input('search_wd', Input::post('search_wd', isset($property) ? $property->search_wd : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search wd')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url1', 'img_url1', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url1', Input::post('img_url1', isset($property) ? $property->img_url1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url1')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url2', 'img_url2', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url2', Input::post('img_url2', isset($property) ? $property->img_url2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url2')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url3', 'img_url3', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url3', Input::post('img_url3', isset($property) ? $property->img_url3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url3')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url4', 'img_url4', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url4', Input::post('img_url4', isset($property) ? $property->img_url4 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url4')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url5', 'img_url5', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url5', Input::post('img_url5', isset($property) ? $property->img_url5 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url5')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url6', 'img_url6', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url6', Input::post('img_url6', isset($property) ? $property->img_url6 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url6')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url7', 'img_url7', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url7', Input::post('img_url7', isset($property) ? $property->img_url7 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url7')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url8', 'img_url8', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url8', Input::post('img_url8', isset($property) ? $property->img_url8 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url8')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url9', 'img_url9', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url9', Input::post('img_url9', isset($property) ? $property->img_url9 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url9')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url10', 'img_url10', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url10', Input::post('img_url10', isset($property) ? $property->img_url10 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url10')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url11', 'img_url11', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url11', Input::post('img_url11', isset($property) ? $property->img_url11 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url11')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url12', 'img_url12', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url12', Input::post('img_url12', isset($property) ? $property->img_url12 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url12')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url13', 'img_url13', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url13', Input::post('img_url13', isset($property) ? $property->img_url13 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url13')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url14', 'img_url14', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url14', Input::post('img_url14', isset($property) ? $property->img_url14 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url14')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img url15', 'img_url15', array('class'=>'control-label')); ?>

				<?php echo Form::input('img_url15', Input::post('img_url15', isset($property) ? $property->img_url15 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img url15')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
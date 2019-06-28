<?php include_once('admin_header.php'); ?>

<div class="container">

	<?php echo form_open_multipart('admin/store_article',['class'=>'form-horizontal']); ?>
	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
	<?= form_hidden('created_at',date('Y-m-d H:i:s')) ?>
	<fieldset>
		<legend>Add Article</legend>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="inputEmail" class="col-lg-3 control-label">Add Article</label>
					<div class="col-lg-9">
						<?php echo form_input(['class'=>'form-control','name'=>'title' ,'placeholder'=>'Article Title','value'=>set_value('title')]); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<?php echo form_error('title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="inputPassword" class="col-lg-3 control-label">Article Body</label>
					<div class="col-lg-9">
						<?php echo form_textarea(['class'=>'form-control','name'=>'body' ,'placeholder'=>'Article Body','value'=>set_value('body')]); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<?php echo form_error('body'); ?>
			</div>		
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="inputEmail" class="col-lg-3 control-label">Select Image</label>
					<div class="col-lg-9">
						<?php echo form_upload(['class'=>'form-control','name'=>'image']); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<?php if(isset($upload_error))
					{
						echo $upload_error;
					}
				 ?>	
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<?php 
				echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
				form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
				?>
			</div>
		</div>
	</fieldset>
</div>
<?php include_once('admin_footer.php'); ?>
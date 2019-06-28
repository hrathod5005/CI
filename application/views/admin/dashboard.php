<?php include_once('admin_header.php') ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
			<?= anchor('admin/add_article',' Add Article',['class'=>'btn btn-lg btn-primary pull-right fa fa-plus']) ?>
		</div>
	</div>
	<?php if( $error = $this->session->flashdata('feedback')): 
	$f_class = $this->session->flashdata('feedback_class');
	?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="alert alert-dismissible <?= $f_class ?>">
				<?= $error ?>	
			</div>
		</div>	
	</div>
<?php endif; ?>
<table class="table">
	<thead>
		<th>Sr. No.</th>
		<th>Title</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php if(count($articles)): 
		$count =  $this->uri->segment(3,0);
		foreach($articles as $article): ?>

		<tr>
			<td><?= ++$count; ?></td>
			<td>
				<?= $article->title  ?>
			</td>
			<td>
				<div class="row">
					<div class="col-lg-2">
						<?= anchor("admin/edit_article/{$article->id}",' Edit',['class'=>'btn btn-primary fa fa-pencil']); ?>	
					</div>
					<div class="col-lg-2">
						<?=
						form_open('admin/delete_article'),
						form_hidden('article_id',$article->id),
						form_submit(['name'=>'submit','value'=>'Delete','class'=>'fa fa-trash btn btn-danger',]),
						form_close(); 	
						?>	
					</div>
				</div>


				<!-- <a href="" class="btn btn-primary" >Edit</a> -->
				<!-- <a href="" class="btn btn-danger" >Delete</a> -->
			</td>
		</tr>
	<?php endforeach; ?>
<?php else: ?>
	<td colspan="3">
		No Record Found.
	</td>
<?php endif; ?>
</tbody>
</table>
<?= $this->pagination->create_links(); ?>
</div>
<?php include_once('admin_footer.php') ?>
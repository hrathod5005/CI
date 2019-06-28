
<div class="container">
	<h1>Search Results</h1>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<td>Sr. No.</td>
				<td>Article Title</td>
				<td>Published On</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<? if(count($articles)): ?>
					<?php $count= $this->uri->segment(4,0); ?>
					<?php foreach($articles as $article):  ?>
						<td><?= ++$count; ?></td>
						<td><?= anchor("user/article/{$article->id}",$article->title) ?></td>
						<td><?= "Date" ?></td>
					</tr>
				<?php endforeach; ?>
			<? else: ?>
			<!-- 	<tr>
					<td colspan="3"> No Records Found.</td>
				</tr> -->
			<? endif; ?>	
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>

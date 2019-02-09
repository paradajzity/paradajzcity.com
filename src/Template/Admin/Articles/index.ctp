<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= __('Aticles') ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><?= __('Aticles') ?></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Title</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Title</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach ($articles as $article): ?>
					<tr>
						<td>
							<?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
						</td>
						<td>
							<?= $article->created->format(DATE_RFC850) ?>
						</td>
						<td>
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->slug]) ?>
							<?= $this->Form->postLink(
								__('Delete'),
								['action' => 'delete', $article->slug],
								['confirm' => __('Are you sure?')])
							?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
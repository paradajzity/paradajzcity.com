<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= __('Users') ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><?= __('Users') ?></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<div class="h3 mb-0"></div>
				<?= $this->Html->link(
					'<i class="fas fa-user-plus fa-sm text-white-50"></i> '
					.__('Add User'),
				   ['action' => 'add'],
				   ['class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm', 'escape' => false]
				) ?>
			</div>
			<div class="my-4"></div>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th><?= __('Id')?></th>
						<th><?= __('Username')?></th>
						<th><?= __('Email')?></th>
						<th><?= __('Priority')?></th>
						<th><?= __('Created')?></th>
						<th><?= __('Action')?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?= $user->id ?></td>
						<td><?= $user->username ?></td>
						<td><?= $user->email ?></td>
						<td><?= $user->priority ?></td>
						<td><?= $user->created->format(DATE_RFC850) ?></td>
						<td class="actions">
							<?= $this->Html->link('<i class="fas fa-user-edit fa-fw"></i>', ['action' => 'edit', $user->id], ['title' => __('Edit'), 'escape' => false]) ?>
							<?= $this->Form->postLink('<i class="fas fa-fw fa-trash-alt"></i>', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'escape' => false]) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


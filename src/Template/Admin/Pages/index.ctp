
<div class="pages index large-9 medium-8 columns content">
    <?= $this->Html->link(__('Add New'), ['action' => 'add'], ['class' => 'btn btn-success pull-right']) ?>
    <h3 class="page-header"><?= __('Pages') ?></h3>
    <table class="table table-responsive table-condensed table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= $this->Number->format($page->id) ?></td>
                <td><?= h($page->name) ?></td>
                <td><?= h($page->created) ?></td>
                <td><?= h($page->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['action' => 'view', $page->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['action' => 'edit', $page->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>
                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


<div class="subCategories index large-9 medium-8 columns content">
    <?= $this->Html->link(__('Add New'), ['action' => 'add'], ['class' => 'btn btn-success pull-right']) ?>
    <h3 class="page-header"><?= __('Sub Categories') ?></h3>
    <table class="table table-responsive table-condensed table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('category_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subCategories as $subCategory): ?>
            <tr>
                <td><?= $this->Number->format($subCategory->id) ?></td>
                <td><?= $subCategory->has('category') ? $this->Html->link($subCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $subCategory->category->id]) : '' ?></td>
                <td><?= h($subCategory->name) ?></td>
                <td><?= h($subCategory->created) ?></td>
                <td><?= h($subCategory->modified) ?></td>
                <td><?= h($subCategory->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['action' => 'view', $subCategory->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['action' => 'edit', $subCategory->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>
                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['action' => 'delete', $subCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>
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

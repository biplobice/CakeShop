
<div class="discounts index large-9 medium-8 columns content">
    <?= $this->Html->link(__('Add New'), ['action' => 'add'], ['class' => 'btn btn-success pull-right']) ?>
    <h3 class="page-header"><?= __('Discounts') ?></h3>
    <table class="table table-responsive table-condensed table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('amount') ?></th>
                <th><?= $this->Paginator->sort('start_at') ?></th>
                <th><?= $this->Paginator->sort('end_at') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discounts as $discount): ?>
            <tr>
                <td><?= $this->Number->format($discount->id) ?></td>
                <td><?= $discount->has('product') ? $this->Html->link($discount->product->name, ['controller' => 'Products', 'action' => 'view', $discount->product->id]) : '' ?></td>
                <td><?= $this->Number->format($discount->amount) ?></td>
                <td><?= h($discount->start_at) ?></td>
                <td><?= h($discount->end_at) ?></td>
                <td><?= h($discount->created) ?></td>
                <td><?= h($discount->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['action' => 'view', $discount->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['action' => 'edit', $discount->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>
                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['action' => 'delete', $discount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discount->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>
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

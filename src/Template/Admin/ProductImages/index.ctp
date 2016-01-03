
<div class="productImages index large-9 medium-8 columns content">
    <?= $this->Html->link(__('Add New'), ['action' => 'add'], ['class' => 'btn btn-success pull-right']) ?>
    <h3 class="page-header"><?= __('Product Images') ?></h3>
    <table class="table table-responsive table-condensed table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productImages as $productImage): ?>
            <tr>
                <td><?= $this->Number->format($productImage->id) ?></td>
                <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                <td><?= h($productImage->image) ?></td>
                <td><?= h($productImage->description) ?></td>
                <td><?= h($productImage->created) ?></td>
                <td><?= h($productImage->modified) ?></td>
                <td><?= h($productImage->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['action' => 'view', $productImage->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['action' => 'edit', $productImage->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>
                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>
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

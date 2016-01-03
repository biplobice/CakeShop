
<div class="productImages view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productImage->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]) ?>
    </div>	
    <h3><?= h($productImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($productImage->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($productImage->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productImage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productImage->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productImage->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $productImage->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>

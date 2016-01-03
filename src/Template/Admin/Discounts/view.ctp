
<div class="discounts view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discount->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discount->id)]) ?>
    </div>	
    <h3><?= h($discount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $discount->has('product') ? $this->Html->link($discount->product->name, ['controller' => 'Products', 'action' => 'view', $discount->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($discount->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Amount') ?></th>
            <td><?= $this->Number->format($discount->amount) ?></td>
        </tr>
        <tr>
            <th><?= __('Start At') ?></th>
            <td><?= h($discount->start_at) ?></td>
        </tr>
        <tr>
            <th><?= __('End At') ?></th>
            <td><?= h($discount->end_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($discount->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($discount->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $discount->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>

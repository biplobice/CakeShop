
<div class="reviews view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $review->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?>
    </div>	
    <h3><?= h($review->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $review->has('product') ? $this->Html->link($review->product->name, ['controller' => 'Products', 'action' => 'view', $review->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $review->has('user') ? $this->Html->link($review->user->id, ['controller' => 'Users', 'action' => 'view', $review->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($review->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Rating') ?></th>
            <td><?= $this->Number->format($review->rating) ?></td>
        </tr>
        <tr>
            <th><?= __('Message') ?></th>
            <td><?= $this->Number->format($review->message) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($review->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($review->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $review->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>

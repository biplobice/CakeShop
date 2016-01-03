
<div class="carts view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cart->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?>
    </div>	
    <h3><?= h($cart->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $cart->has('user') ? $this->Html->link($cart->user->id, ['controller' => 'Users', 'action' => 'view', $cart->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $cart->has('product') ? $this->Html->link($cart->product->name, ['controller' => 'Products', 'action' => 'view', $cart->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cart->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($cart->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($cart->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($cart->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($cart->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $cart->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Purchase'), ['action' => 'edit', $purchase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Purchase'), ['action' => 'delete', $purchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Purchases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="purchases view large-9 medium-8 columns content">
    <h3><?= h($purchase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $purchase->has('order') ? $this->Html->link($purchase->order->id, ['controller' => 'Orders', 'action' => 'view', $purchase->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $purchase->has('product') ? $this->Html->link($purchase->product->name, ['controller' => 'Products', 'action' => 'view', $purchase->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($purchase->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($purchase->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($purchase->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($purchase->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($purchase->modified) ?></td>
        </tr>
    </table>
</div>

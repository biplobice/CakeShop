<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Purchase'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="purchases index large-9 medium-8 columns content">
    <h3><?= __('Purchases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('quantity') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($purchases as $purchase): ?>
            <tr>
                <td><?= $this->Number->format($purchase->id) ?></td>
                <td><?= $purchase->has('order') ? $this->Html->link($purchase->order->id, ['controller' => 'Orders', 'action' => 'view', $purchase->order->id]) : '' ?></td>
                <td><?= $purchase->has('product') ? $this->Html->link($purchase->product->name, ['controller' => 'Products', 'action' => 'view', $purchase->product->id]) : '' ?></td>
                <td><?= $this->Number->format($purchase->price) ?></td>
                <td><?= $this->Number->format($purchase->quantity) ?></td>
                <td><?= h($purchase->created) ?></td>
                <td><?= h($purchase->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $purchase->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $purchase->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $purchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase->id)]) ?>
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

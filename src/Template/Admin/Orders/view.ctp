
<div class="orders view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
    </div>	
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->id, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($order->city) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($order->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= $this->Number->format($order->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($order->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Receiver Address') ?></h4>
        <?= $this->Text->autoParagraph(h($order->receiver_address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Purchases') ?></h4>
        <?php if (!empty($order->purchases)): ?>
        <table class="table table-responsive table-condensed table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Order Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->purchases as $purchases): ?>
            <tr>
                <td><?= h($purchases->id) ?></td>
                <td><?= h($purchases->order_id) ?></td>
                <td><?= h($purchases->product_id) ?></td>
                <td><?= h($purchases->price) ?></td>
                <td><?= h($purchases->quantity) ?></td>
                <td><?= h($purchases->created) ?></td>
                <td><?= h($purchases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['controller' => 'Purchases', 'action' => 'view', $purchases->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>

                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['controller' => 'Purchases', 'action' => 'edit', $purchases->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>

                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['controller' => 'Purchases', 'action' => 'delete', $purchases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchases->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>

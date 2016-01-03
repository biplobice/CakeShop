
<div class="products view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
    </div>	
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Sub Category') ?></th>
            <td><?= $product->has('sub_category') ? $this->Html->link($product->sub_category->name, ['controller' => 'SubCategories', 'action' => 'view', $product->sub_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Sku') ?></th>
            <td><?= h($product->sku) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Model') ?></th>
            <td><?= h($product->model) ?></td>
        </tr>
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= h($product->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($product->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Thumb') ?></th>
            <td><?= h($product->thumb) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Buy Price') ?></th>
            <td><?= $this->Number->format($product->buy_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Sell Price') ?></th>
            <td><?= $this->Number->format($product->sell_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Units In Stock') ?></th>
            <td><?= $this->Number->format($product->units_in_stock) ?></td>
        </tr>
        <tr>
            <th><?= __('Weight') ?></th>
            <td><?= $this->Number->format($product->weight) ?></td>
        </tr>
        <tr>
            <th><?= __('Rating') ?></th>
            <td><?= $this->Number->format($product->rating) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $product->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Carts') ?></h4>
        <?php if (!empty($product->carts)): ?>
        <table class="table table-responsive table-condensed table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->carts as $carts): ?>
            <tr>
                <td><?= h($carts->id) ?></td>
                <td><?= h($carts->user_id) ?></td>
                <td><?= h($carts->product_id) ?></td>
                <td><?= h($carts->price) ?></td>
                <td><?= h($carts->quantity) ?></td>
                <td><?= h($carts->created) ?></td>
                <td><?= h($carts->modified) ?></td>
                <td><?= h($carts->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['controller' => 'Carts', 'action' => 'view', $carts->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>

                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['controller' => 'Carts', 'action' => 'edit', $carts->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>

                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['controller' => 'Carts', 'action' => 'delete', $carts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carts->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Discounts') ?></h4>
        <?php if (!empty($product->discounts)): ?>
        <table class="table table-responsive table-condensed table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Amount') ?></th>
                <th><?= __('Start At') ?></th>
                <th><?= __('End At') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->discounts as $discounts): ?>
            <tr>
                <td><?= h($discounts->id) ?></td>
                <td><?= h($discounts->product_id) ?></td>
                <td><?= h($discounts->amount) ?></td>
                <td><?= h($discounts->start_at) ?></td>
                <td><?= h($discounts->end_at) ?></td>
                <td><?= h($discounts->created) ?></td>
                <td><?= h($discounts->modified) ?></td>
                <td><?= h($discounts->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['controller' => 'Discounts', 'action' => 'view', $discounts->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>

                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['controller' => 'Discounts', 'action' => 'edit', $discounts->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>

                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['controller' => 'Discounts', 'action' => 'delete', $discounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discounts->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Purchases') ?></h4>
        <?php if (!empty($product->purchases)): ?>
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
            <?php foreach ($product->purchases as $purchases): ?>
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

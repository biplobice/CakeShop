
<div class="subCategories view large-9 medium-8 columns content">
    <div class="pull-right">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subCategory->id]) ?> |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]) ?>
    </div>	
    <h3><?= h($subCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $subCategory->has('category') ? $this->Html->link($subCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $subCategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($subCategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($subCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($subCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($subCategory->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $subCategory->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subCategory->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($subCategory->products)): ?>
        <table class="table table-responsive table-condensed table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Sub Category Id') ?></th>
                <th><?= __('Sku') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Model') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Buy Price') ?></th>
                <th><?= __('Sell Price') ?></th>
                <th><?= __('Units In Stock') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Color') ?></th>
                <th><?= __('Weight') ?></th>
                <th><?= __('Rating') ?></th>
                <th><?= __('Thumb') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subCategory->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->category_id) ?></td>
                <td><?= h($products->sub_category_id) ?></td>
                <td><?= h($products->sku) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->model) ?></td>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->buy_price) ?></td>
                <td><?= h($products->sell_price) ?></td>
                <td><?= h($products->units_in_stock) ?></td>
                <td><?= h($products->size) ?></td>
                <td><?= h($products->color) ?></td>
                <td><?= h($products->weight) ?></td>
                <td><?= h($products->rating) ?></td>
                <td><?= h($products->thumb) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <td><?= h($products->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), ['controller' => 'Products', 'action' => 'view', $products->id], ['class' => 'btn btn-xs btn-primary', 'escapeTitle' => false]) ?>

                    <?= $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), ['controller' => 'Products', 'action' => 'edit', $products->id], ['class' => 'btn btn-xs btn-warning', 'escapeTitle' => false]) ?>

                    <?= $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id), 'class' => 'btn btn-xs btn-danger', 'escapeTitle' => false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>

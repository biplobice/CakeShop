<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sub Category'), ['action' => 'edit', $subCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sub Category'), ['action' => 'delete', $subCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subCategories view large-9 medium-8 columns content">
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
            <th><?= __('Updated') ?></th>
            <td><?= h($subCategory->updated) ?></td>
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
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Sub Category Id') ?></th>
                <th><?= __('Sku') ?></th>
                <th><?= __('Name') ?></th>
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
                <th><?= __('Updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subCategory->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->category_id) ?></td>
                <td><?= h($products->sub_category_id) ?></td>
                <td><?= h($products->sku) ?></td>
                <td><?= h($products->name) ?></td>
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
                <td><?= h($products->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>

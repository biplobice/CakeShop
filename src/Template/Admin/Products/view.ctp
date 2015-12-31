<div class="products view large-9 medium-8 columns content">
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
            <th><?= __('Size') ?></th>
            <td><?= h($product->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($product->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Weight') ?></th>
            <td><?= h($product->weight) ?></td>
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
            <th><?= __('Rating') ?></th>
            <td><?= $this->Number->format($product->rating) ?></td>
        </tr>
        <tr>
            <th><?= __('Thumb') ?></th>
            <td><?= $this->Number->format($product->thumb) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($product->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
</div>

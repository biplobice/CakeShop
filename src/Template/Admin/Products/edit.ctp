<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carts'), ['controller' => 'Carts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cart'), ['controller' => 'Carts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discounts'), ['controller' => 'Discounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discount'), ['controller' => 'Discounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Purchases'), ['controller' => 'Purchases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Purchase'), ['controller' => 'Purchases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->input('sub_category_id', ['options' => $subCategories, 'empty' => true]);
            echo $this->Form->input('sku');
            echo $this->Form->input('name');
            echo $this->Form->input('model');
            echo $this->Form->input('description');
            echo $this->Form->input('buy_price');
            echo $this->Form->input('sell_price');
            echo $this->Form->input('units_in_stock');
            echo $this->Form->input('size');
            echo $this->Form->input('color');
            echo $this->Form->input('weight');
            echo $this->Form->input('rating');
            echo $this->Form->input('thumb');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->input('sub_category_id', ['options' => $subCategories, 'empty' => true]);
            echo $this->Form->input('sku');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('buy_price');
            echo $this->Form->input('sell_price');
            echo $this->Form->input('units_in_stock');
            echo $this->Form->input('size');
            echo $this->Form->input('color');
            echo $this->Form->input('weight');
            echo $this->Form->input('rating');
            echo $this->Form->input('thumb');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

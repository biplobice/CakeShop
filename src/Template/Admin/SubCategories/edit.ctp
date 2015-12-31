<div class="subCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($subCategory) ?>
    <fieldset>
        <legend><?= __('Edit Sub Category') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

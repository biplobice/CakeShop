<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('company_name');
            echo $this->Form->input('avatar');
            echo $this->Form->input('birth_date', ['empty' => true]);
            echo $this->Form->input('address');
            echo $this->Form->input('address2');
            echo $this->Form->input('city');
            echo $this->Form->input('zip');
            echo $this->Form->input('country');
            echo $this->Form->input('phone');
            echo $this->Form->input('role');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

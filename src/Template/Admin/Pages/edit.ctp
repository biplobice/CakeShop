<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $page->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pages form large-9 medium-8 columns content">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Edit Page') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

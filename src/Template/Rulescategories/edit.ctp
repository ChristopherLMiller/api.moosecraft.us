<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rulescategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rulescategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rulescategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rules'), ['controller' => 'Rules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rule'), ['controller' => 'Rules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rulescategories form large-9 medium-8 columns content">
    <?= $this->Form->create($rulescategory) ?>
    <fieldset>
        <legend><?= __('Edit Rulescategory') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('icon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

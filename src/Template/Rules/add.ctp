<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rules Categories'), ['controller' => 'RulesCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rules Category'), ['controller' => 'RulesCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rules form large-9 medium-8 columns content">
    <?= $this->Form->create($rule) ?>
    <fieldset>
        <legend><?= __('Add Rule') ?></legend>
        <?php
            echo $this->Form->input('rules_category_id', ['options' => $rulesCategories]);
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

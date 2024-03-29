<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rule'), ['action' => 'edit', $rule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rule'), ['action' => 'delete', $rule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rules Categories'), ['controller' => 'RulesCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rules Category'), ['controller' => 'RulesCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rules view large-9 medium-8 columns content">
    <h3><?= h($rule->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Rules Category') ?></th>
            <td><?= $rule->has('rules_category') ? $this->Html->link($rule->rules_category->name, ['controller' => 'RulesCategories', 'action' => 'view', $rule->rules_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($rule->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($rule->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($rule->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($rule->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($rule->modified) ?></td>
        </tr>
    </table>
</div>

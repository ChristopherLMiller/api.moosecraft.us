<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rulescategory'), ['action' => 'edit', $rulescategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rulescategory'), ['action' => 'delete', $rulescategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rulescategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rulescategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rulescategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rules'), ['controller' => 'Rules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rule'), ['controller' => 'Rules', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rulescategories view large-9 medium-8 columns content">
    <h3><?= h($rulescategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($rulescategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Icon') ?></th>
            <td><?= h($rulescategory->icon) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($rulescategory->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Rules') ?></h4>
        <?php if (!empty($rulescategory->rules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Rules Category Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($rulescategory->rules as $rules): ?>
            <tr>
                <td><?= h($rules->id) ?></td>
                <td><?= h($rules->rules_category_id) ?></td>
                <td><?= h($rules->name) ?></td>
                <td><?= h($rules->description) ?></td>
                <td><?= h($rules->created) ?></td>
                <td><?= h($rules->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rules', 'action' => 'view', $rules->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rules', 'action' => 'edit', $rules->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rules', 'action' => 'delete', $rules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rules->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rules Categories'), ['controller' => 'RulesCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rules Category'), ['controller' => 'RulesCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rules index large-9 medium-8 columns content">
    <h3><?= __('Rules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('rules_category_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rules as $rule): ?>
            <tr>
                <td><?= $this->Number->format($rule->id) ?></td>
                <td><?= $rule->has('rules_category') ? $this->Html->link($rule->rules_category->name, ['controller' => 'RulesCategories', 'action' => 'view', $rule->rules_category->id]) : '' ?></td>
                <td><?= h($rule->name) ?></td>
                <td><?= h($rule->description) ?></td>
                <td><?= h($rule->created) ?></td>
                <td><?= h($rule->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rule->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

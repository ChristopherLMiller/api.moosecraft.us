<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Notebook Note'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notebookNotes index large-9 medium-8 columns content">
    <h3><?= __('Notebook Notes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('player') ?></th>
                <th><?= $this->Paginator->sort('poster') ?></th>
                <th><?= $this->Paginator->sort('note') ?></th>
                <th><?= $this->Paginator->sort('time') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notebookNotes as $notebookNote): ?>
            <tr>
                <td><?= $this->Number->format($notebookNote->id) ?></td>
                <td><?= h($notebookNote->player) ?></td>
                <td><?= h($notebookNote->poster) ?></td>
                <td><?= h($notebookNote->note) ?></td>
                <td><?= h($notebookNote->time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $notebookNote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notebookNote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notebookNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notebookNote->id)]) ?>
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

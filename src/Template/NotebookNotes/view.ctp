<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Notebook Note'), ['action' => 'edit', $notebookNote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notebook Note'), ['action' => 'delete', $notebookNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notebookNote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notebook Notes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notebook Note'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="notebookNotes view large-9 medium-8 columns content">
    <h3><?= h($notebookNote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Player') ?></th>
            <td><?= h($notebookNote->player) ?></td>
        </tr>
        <tr>
            <th><?= __('Poster') ?></th>
            <td><?= h($notebookNote->poster) ?></td>
        </tr>
        <tr>
            <th><?= __('Note') ?></th>
            <td><?= h($notebookNote->note) ?></td>
        </tr>
        <tr>
            <th><?= __('Time') ?></th>
            <td><?= h($notebookNote->time) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($notebookNote->id) ?></td>
        </tr>
    </table>
</div>

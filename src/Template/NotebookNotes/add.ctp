<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Notebook Notes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="notebookNotes form large-9 medium-8 columns content">
    <?= $this->Form->create($notebookNote) ?>
    <fieldset>
        <legend><?= __('Add Notebook Note') ?></legend>
        <?php
            echo $this->Form->input('player');
            echo $this->Form->input('poster');
            echo $this->Form->input('note');
            echo $this->Form->input('time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

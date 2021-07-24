<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $websiteArticle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $websiteArticle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Website Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="websiteArticles form large-9 medium-8 columns content">
    <?= $this->Form->create($websiteArticle) ?>
    <fieldset>
        <legend><?= __('Edit Website Article') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('slug');
            echo $this->Form->input('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

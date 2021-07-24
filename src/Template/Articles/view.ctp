<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Website Article'), ['action' => 'edit', $websiteArticle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Website Article'), ['action' => 'delete', $websiteArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $websiteArticle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Website Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Website Article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="websiteArticles view large-9 medium-8 columns content">
    <h3><?= h($websiteArticle->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($websiteArticle->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($websiteArticle->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($websiteArticle->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($websiteArticle->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($websiteArticle->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($websiteArticle->body)); ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Website Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="websiteArticles index large-9 medium-8 columns content">
    <h3><?= __('Website Articles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($websiteArticles as $websiteArticle): ?>
            <tr>
                <td><?= $this->Number->format($websiteArticle->id) ?></td>
                <td><?= h($websiteArticle->title) ?></td>
                <td><?= h($websiteArticle->slug) ?></td>
                <td><?= h($websiteArticle->created) ?></td>
                <td><?= h($websiteArticle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $websiteArticle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $websiteArticle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $websiteArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $websiteArticle->id)]) ?>
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

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bid Topic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Objects'), ['controller' => 'BidObjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Object'), ['controller' => 'BidObjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Users'), ['controller' => 'BidUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid User'), ['controller' => 'BidUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidTopics index large-9 medium-8 columns content">
    <h3><?= __('Bid Topics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('obj_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('declares') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidTopics as $bidTopic): ?>
            <tr>
                <td><?= $this->Number->format($bidTopic->id) ?></td>
                <td><?= $bidTopic->has('bid_object') ? $this->Html->link($bidTopic->bid_object->title, ['controller' => 'BidObjects', 'action' => 'view', $bidTopic->bid_object->id]) : '' ?></td>
                <td><?= $bidTopic->has('bid_user') ? $this->Html->link($bidTopic->bid_user->id, ['controller' => 'BidUsers', 'action' => 'view', $bidTopic->bid_user->id]) : '' ?></td>
                <td><?= $this->Number->format($bidTopic->declares) ?></td>
                <td><?= h($bidTopic->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bidTopic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bidTopic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bidTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidTopic->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

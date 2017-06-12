<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bid Object'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Users'), ['controller' => 'BidUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid User'), ['controller' => 'BidUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidObjects index large-9 medium-8 columns content">
    <h3><?= __('Bid Objects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images_b') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images_c') ?></th>
                <th scope="col"><?= $this->Paginator->sort('step_call') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidObjects as $bidObject): ?>
            <tr>
                <td><?= $this->Number->format($bidObject->id) ?></td>
                <td><?= $bidObject->has('bid_user') ? $this->Html->link($bidObject->bid_user->id, ['controller' => 'BidUsers', 'action' => 'view', $bidObject->bid_user->id]) : '' ?></td>
                <td><?= h($bidObject->title) ?></td>
                <td><?= h($bidObject->images_a) ?></td>
                <td><?= h($bidObject->images_b) ?></td>
                <td><?= h($bidObject->images_c) ?></td>
                <td><?= $this->Number->format($bidObject->step_call) ?></td>
                <td><?= $this->Number->format($bidObject->status) ?></td>
                <td><?= h($bidObject->origin) ?></td>
                <td><?= h($bidObject->brand) ?></td>
                <td><?= h($bidObject->start_time) ?></td>
                <td><?= h($bidObject->end_time) ?></td>
                <td><?= h($bidObject->created) ?></td>
                <td><?= h($bidObject->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bidObject->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bidObject->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bidObject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidObject->id)]) ?>
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

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bid User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidUsers index large-9 medium-8 columns content">
    <h3><?= __('Bid Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('districts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rolls') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidUsers as $bidUser): ?>
            <tr>
                <td><?= $this->Number->format($bidUser->id) ?></td>
                <td><?= h($bidUser->email) ?></td>
                <td><?= h($bidUser->username) ?></td>
                <td><?= $this->Number->format($bidUser->phone) ?></td>
                <td><?= h($bidUser->districts) ?></td>
                <td><?= h($bidUser->password) ?></td>
                <td><?= $this->Number->format($bidUser->rolls) ?></td>
                <td><?= h($bidUser->created) ?></td>
                <td><?= h($bidUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bidUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bidUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bidUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidUser->id)]) ?>
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

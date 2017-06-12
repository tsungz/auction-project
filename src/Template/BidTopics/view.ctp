<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid Topic'), ['action' => 'edit', $bidTopic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid Topic'), ['action' => 'delete', $bidTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidTopic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Topic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Objects'), ['controller' => 'BidObjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Object'), ['controller' => 'BidObjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bid Users'), ['controller' => 'BidUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid User'), ['controller' => 'BidUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidTopics view large-9 medium-8 columns content">
    <h3><?= h($bidTopic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bid Object') ?></th>
            <td><?= $bidTopic->has('bid_object') ? $this->Html->link($bidTopic->bid_object->title, ['controller' => 'BidObjects', 'action' => 'view', $bidTopic->bid_object->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bid User') ?></th>
            <td><?= $bidTopic->has('bid_user') ? $this->Html->link($bidTopic->bid_user->id, ['controller' => 'BidUsers', 'action' => 'view', $bidTopic->bid_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidTopic->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Declares') ?></th>
            <td><?= $this->Number->format($bidTopic->declares) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidTopic->created) ?></td>
        </tr>
    </table>
</div>

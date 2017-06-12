<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid User'), ['action' => 'edit', $bidUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid User'), ['action' => 'delete', $bidUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidUsers view large-9 medium-8 columns content">
    <h3><?= h($bidUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($bidUser->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($bidUser->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Districts') ?></th>
            <td><?= h($bidUser->districts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($bidUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($bidUser->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rolls') ?></th>
            <td><?= $this->Number->format($bidUser->rolls) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bidUser->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($bidUser->address)); ?>
    </div>
</div>

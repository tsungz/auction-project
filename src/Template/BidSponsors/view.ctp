<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bid Sponsor'), ['action' => 'edit', $bidSponsor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bid Sponsor'), ['action' => 'delete', $bidSponsor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidSponsor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bid Sponsors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bid Sponsor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidSponsors view large-9 medium-8 columns content">
    <h3><?= h($bidSponsor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Spon Name') ?></th>
            <td><?= h($bidSponsor->spon_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidSponsor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidSponsor->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Details') ?></h4>
        <?= $this->Text->autoParagraph(h($bidSponsor->details)); ?>
    </div>
</div>

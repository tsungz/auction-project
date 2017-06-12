<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bidTopic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bidTopic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bid Topics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bid Objects'), ['controller' => 'BidObjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid Object'), ['controller' => 'BidObjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bid Users'), ['controller' => 'BidUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid User'), ['controller' => 'BidUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidTopics form large-9 medium-8 columns content">
    <?= $this->Form->create($bidTopic) ?>
    <fieldset>
        <legend><?= __('Edit Bid Topic') ?></legend>
        <?php
            echo $this->Form->control('obj_id', ['options' => $bidObjects]);
            echo $this->Form->control('user_id', ['options' => $bidUsers]);
            echo $this->Form->control('declares');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

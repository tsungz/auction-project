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
                ['action' => 'delete', $bidObject->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bidObject->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bid Objects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bid Users'), ['controller' => 'BidUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bid User'), ['controller' => 'BidUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidObjects form large-9 medium-8 columns content">
    <?= $this->Form->create($bidObject) ?>
    <fieldset>
        <legend><?= __('Edit Bid Object') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $bidUsers]);
            echo $this->Form->control('title');
            echo $this->Form->control('details');
            echo $this->Form->control('images_a');
            echo $this->Form->control('images_b');
            echo $this->Form->control('images_c');
            echo $this->Form->control('step_call');
            echo $this->Form->control('status');
            echo $this->Form->control('origin');
            echo $this->Form->control('brand');
            echo $this->Form->control('start_time');
            echo $this->Form->control('end_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

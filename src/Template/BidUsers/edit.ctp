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
                ['action' => 'delete', $bidUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bidUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bid Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bidUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($bidUser) ?>
    <fieldset>
        <legend><?= __('Edit Bid User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('districts');
            echo $this->Form->control('password');
            echo $this->Form->control('rolls');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

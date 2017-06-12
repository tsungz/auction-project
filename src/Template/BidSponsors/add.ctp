<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bid Sponsors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bidSponsors form large-9 medium-8 columns content">
    <?= $this->Form->create($bidSponsor) ?>
    <fieldset>
        <legend><?= __('Add Bid Sponsor') ?></legend>
        <?php
            echo $this->Form->control('spon_name');
            echo $this->Form->control('details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

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
                ['action' => 'delete', $bidSponsor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bidSponsor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bid Sponsors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bidSponsors form large-9 medium-8 columns content">
    <?= $this->Form->create($bidSponsor) ?>
    <fieldset>
        <legend><?= __('Edit Bid Sponsor') ?></legend>
        <?php
            echo $this->Form->control('spon_name');
            echo $this->Form->control('details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

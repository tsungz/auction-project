<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Danh sách phiên đấu giá</title>
    </head>
    <body>

    <?= $this->element('Include/'.Configure::read('Common.Navigation')); ?>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-12 text-left">
                <h4>Lọc sản phẩm</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr>
                <h3>Test</h3>
                <p>Lorem ipsum...</p>
            </div>
            <div class="table-responsive col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th class="col-sm-2"><?= $this->Paginator->sort('id', 'Sản phẩm') ?></th>
                          <th class="col-sm-4"><?= $this->Paginator->sort('title', 'Tên kèo bid') ?></th>
                          <th class="col-sm-2"><?= $this->Paginator->sort('starting_price', 'Giá khởi điểm') ?></th>
                          <th class="col-sm-2"><?= $this->Paginator->sort('current_price', 'Giá hiện tại') ?></th>
                          <th class="col-sm-1"><?= $this->Paginator->sort('step_call', 'Bước giá') ?></th>
                          <th class="col-sm-1"><?= $this->Paginator->sort('end_time', 'Tồn tại') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bidObjects as $bidObject) : ?>
                            <tr>
                                <!--<td><?= h($bidObject->images_a) ?></td>-->
                                <!--<td><img src="/img/test 2.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>-->
                                <td><?= $this->Html->link($this->Html->image($bidObject->images_a, array('escape' => false, 'class' => 'img-thumbnail', 'width' => "100", 'height' => "100")), ['action' => 'view', $bidObject->id], array('escape' => false)); ?></td>
                                <!--<td><?= $this->Number->format($bidObject->id) ?></td>-->
                                <!--<td><?= $bidObject->has('bid_user') ? $this->Html->link($bidObject->bid_user->id, ['controller' => 'BidUsers', 'action' => 'view', $bidObject->bid_user->id]) : '' ?></td>-->
                                <td><?= $this->Html->link($bidObject->title, ['action' => 'view', $bidObject->id]) ?></td>
                                <!--<td><?= h($bidObject->images_a) ?></td>-->
                                <!--<td><?= h($bidObject->images_b) ?></td>-->
                                <!--<td><?= h($bidObject->images_c) ?></td>-->
                                <td><?= $this->Number->format($bidObject->starting_price) ?>,000</td>
                                <td><?= $this->Number->format($bidObject->current_price) ?>,000</td>
                                <td><?= $this->Number->format($bidObject->step_call) ?>,000</td>
                                <td><?= h($bidObject->time_left) ?></td>
<!--                                <td><?= $this->Number->format($bidObject->status) ?></td>
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
                                </td>-->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="paginator col-sm-12 text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Trang số {{page}} trong tổng số {{pages}} trang, hiển thị {{current}} kèo tổng số {{count}} kèo')]) ?></p>
            </div>
        </div>
    </div>

    <?= $this->element('Include/footer'); ?>

    </body>
</html>


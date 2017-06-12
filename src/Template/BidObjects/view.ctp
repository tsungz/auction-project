<?php
/**
* @var \App\View\AppView $this
*/
use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Phiên đấu giá</title>
    </head>
    <body>

        <?= $this->element('Include/'.Configure::read('Common.Navigation')); ?>

        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-8 text-left">

                        <h4><?= h($bidObject->title) ?></h4>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="/img/test.jpg" alt="Los Angeles" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="/img/test.jpg" alt="Chicago" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="/img/test.jpg" alt="New york" style="width:100%;">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <div class="col-sm-12 text-left">
                        <div class="col-sm-6 text-left">
                            <div class="well">
                                <p>Bắt đầu: <?= h($bidObject->start_time) ?></p>
                                <p>Kết thúc: <?= h($bidObject->end_time) ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-left">
                            <div class="well">
                                <p>Khởi điểm: </p>
                                <p>Bước giá: </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-left">
                    <div class="well text-center">
                        <button type="button" class="btn btn-warning btn-lg">Auction</button>
                    </div>
                    <div class="well">
                        <p>Khu vực ưu tiên: Hà Nội</p>
                        <p>Phạm vi ship: Hà Nội</p>
                        <p>Thông tin ship: Feeship, COD</p>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->element('Include/footer'); ?>

    </body>
</html>

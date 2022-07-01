<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Produk Toko Baru Amalia</h1>

        <p class="lead">Daftar produk-produk di toko kami</p>
        <p class="lead"><?= $caches?></p>
    </div>

    <div class="body-content">

        <div class="col-4 pl-0">
            <?php $form = ActiveForm::begin([
                'method' => 'get',
                'action' => Url::to(['/item/filter'])
            ]); ?>

            <label>Categories</label>
            <div class="d-flex">
                <select name="category_id" class="form-control mb-3 mr-3">
                    <?php 
                        foreach ($categories as $category) {
                            ?>
                                <option value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php
                        }
                    ?>
                </select>

                <div class="form-group">
                    <?= Html::submitButton('Filter', ['class' => 'btn btn-info']) ?>
                </div>

            </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div class="row">
            <?php 
                foreach ($model as $item) {
                    ?>
                        <div class="col-lg-4">
                            <?= Html::img('@web/img/' . $item->img_url, ['class' => 'img-thumbnail rounded mb-3', 'width' => '50%'])?>

                            <h2><?= $item->nama_barang ?></h2>

                            <p>Rp.<?= number_format($item->harga)?></p>

                            <p><a class="btn btn-success" href="site/checkout">Beli Produk</a></p>
                        </div>
                    <?php
                }
            ?>
                      
        </div>

        <br>
        <?php 
            echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>

    </div>
</div>
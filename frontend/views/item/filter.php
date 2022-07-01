<?php
    use yii\Helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
?>


<div class="col-4 pl-0">
    <?php $form = ActiveForm::begin([
           'method' => 'get',
            'action' => Url::to(['/item/filter'])
        ]); ?>

            <label>Categories</label>
            <div class="d-flex pl-0">
                <select name="category_id" class="from-control mb-3 mr-3">
                    <?php
                        foreach ($categories as $category) {
                            ?>
                            <option value="<?= $category->id ?>" <?= Yii::$app->request->get('category_id') == $category->id ? 'selected' : '' ?> ><?= $category->name ?></option>
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
        foreach ($rows as $item) {
            ?>
                <div class="col-lg-4">
                    <?= Html::img('@web/img/' . $item['img_url'], ['class' => 'img-thumbnail rounded mb-3', 'width' => '80%']) ?>
                        <h2><?= $item['nama_barang'] ?></h2>

                        <p style="color: blue;">Rp.<?= number_format($item['harga']) ?></p>

                        <p><a class="btn btn-success" href="site/checkout">Beli Produk </a></p>
                </div>
            <?php
        }
    ?>
</div>
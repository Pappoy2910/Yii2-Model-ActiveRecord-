<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa052 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa052-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NomorIndukMahasiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaMahasiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

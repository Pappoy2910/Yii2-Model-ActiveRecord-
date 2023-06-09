<?php

use app\models\Mahasiswa052;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa052Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mahasiswa/Indah Triyanti Ramadhani';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa052-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Buat Data Baru', ['create'], ['classz' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'NomorIndukMahasiswa',
            'NamaMahasiswa',
            'Kelas',
            'Status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa052 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

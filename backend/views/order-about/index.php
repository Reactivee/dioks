<?php

use common\models\OrderAbout;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\OrderAboutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Order Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order About', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'status',
            'country',
            'name_ru',
//            'name_uz',
//            'name_en',
            'region',
            'delivery_time:datetime',
            'order_code',
            'created_at:datetime',
            'updated_at:datetime',
//            'long',
//            'lat',
            'truck_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderAbout $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

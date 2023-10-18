<?php

use common\models\Order;
use common\models\OrderAbout;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\OrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin();  ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'client_name',
            'phone',

            'name_ru',
            'cargo_type',
            [
                'attribute' => 'cargo_from_location',
                'value' => function ($model) {
                    return $model->countries->name_ru ?? '';
                }

            ], [
                'attribute' =>  'cargo_to_location',
                'value' => function ($model) {
                    return $model->regions->name_ru ?? '';
                }

            ],

            'mass',
            'created_at:datetime',
            'updated_at:datetime',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

<?php

namespace frontend\widgets;
/**
 * Created by PhpStorm.
 */


use yii\base\Widget;


class SubmitForm extends Widget
{
    public $model;
    public $id;
    public $where;
    public $line;

    public function init()
    {


    }

    public function run()
    {
        return $this->render('submit', [
            'model' => $this->model,
        ]);
    }


}
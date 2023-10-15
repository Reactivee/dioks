<?php

namespace common\models;

use PHPUnit\Framework\Constraint\Count;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $image
 * @property int|null $parent_id
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'image' => 'Image',
            'parent_id' => 'Parent ID',
        ];
    }

    public function getCountry()
    {
        $items = self::find()->where(['parent_id' => null])->all();
        return ArrayHelper::map($items, 'id', 'name_ru');
    }

    public static function getALlCountry()
    {
        $items = self::find()->where(['parent_id' => null])->all();
        return ArrayHelper::map($items, 'id', 'name_ru');
    }


    public function getParent()
    {
        return $this->hasOne(Country::className(), ['id' => 'parent_id']);
    }

    public function beforeSave($insert)
    {

        if (!$this->isNewRecord) {
            if ($this->parent_id == $this->id) {
                return false;
            }

        }

        return parent::beforeSave($insert);
    }
}

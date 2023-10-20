<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type_transport".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $image
 * @property string|null $desc_en
 * @property string|null $desc_ru
 * @property string|null $desc_uz
 * @property int|null $key
 */
class TypeTransport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_transport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'image', 'desc_en', 'desc_ru', 'desc_uz'], 'string', 'max' => 255],
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
            'desc_en' => 'Desc En',
            'desc_ru' => 'Desc Ru',
            'desc_uz' => 'Desc Uz',
            'key' => 'Key',
        ];
    }
}

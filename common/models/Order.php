<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $cargo_type
 * @property int|null $cargo_from_location
 * @property int|null $cargo_to_location
 * @property int|null $status
 * @property int|null $currently_location
 * @property string|null $delivery_time
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cargo_type', 'cargo_from_location', 'cargo_to_location', 'status', 'currently_location'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'delivery_time', 'created_at', 'updated_at'], 'string', 'max' => 255],
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
            'cargo_type' => 'Cargo Type',
            'cargo_from_location' => 'Cargo From Location',
            'cargo_to_location' => 'Cargo To Location',
            'status' => 'Status',
            'currently_location' => 'Currently Location',
            'delivery_time' => 'Delivery Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}

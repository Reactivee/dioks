<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $phone
 * @property string|null $cargo_mass
 * @property string|null $dimension
 * @property int|null $cargo_to_location
 * @property int|null $cargo_from_location
 * @property string|null $order_code
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cargo_to_location', 'cargo_from_location'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'phone', 'cargo_mass', 'dimension', 'order_code'], 'string', 'max' => 255],
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
            'phone' => 'Phone',
            'cargo_mass' => 'Cargo Mass',
            'dimension' => 'Dimension',
            'cargo_to_location' => 'Cargo To Location',
            'cargo_from_location' => 'Cargo From Location',
            'order_code' => 'Order Code',
        ];
    }
}

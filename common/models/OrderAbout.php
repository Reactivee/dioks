<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_about".
 *
 * @property int $id
 * @property int|null $status
 * @property string|null $country
 * @property string|null $name_ru
 * @property string|null $name_uz
 * @property string|null $name_en
 * @property string|null $region
 * @property int|null $delivery_time
 * @property string|null $order_code
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $long
 * @property string|null $lat
 * @property string|null $truck_id
 */
class OrderAbout extends \yii\db\ActiveRecord
{


    const SENDING = 1;
    const SENT = 2;
    const CUSTOM = 3;
    const DELIVERED = 4;
    const CANCELLED = -1;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'delivery_time', 'created_at', 'updated_at'], 'integer'],
            [['country', 'name_ru', 'name_uz', 'name_en', 'region', 'order_code', 'long', 'lat', 'truck_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'country' => 'Country',
            'name_ru' => 'Name Ru',
            'name_uz' => 'Name Uz',
            'name_en' => 'Name En',
            'region' => 'Region',
            'delivery_time' => 'Delivery Time',
            'order_code' => 'Order Code',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'long' => 'Long',
            'lat' => 'Lat',
            'truck_id' => 'Truck ID',
        ];
    }

    public static function getAllStatus()
    {
        $status = [
            self::SENDING => 'Отправляется',
            self::SENT => 'В Пути',
            self::CUSTOM => 'На Таможенном контроле',
            self::DELIVERED => 'Доставлено',
            self::CANCELLED => 'Отменено',
        ];
        return $status;
    }
}

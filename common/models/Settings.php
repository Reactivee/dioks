<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string|null $key_uz
 * @property string|null $key_ru
 * @property string|null $key_en
 * @property string|null $site_name_uz
 * @property string|null $site_name_ru
 * @property string|null $site_name_en
 * @property string|null $desc_uz
 * @property string|null $desc_en
 * @property string|null $desc_ru
 * @property string|null $tg
 * @property string|null $facebook
 * @property string|null $instagram
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key_uz', 'key_ru', 'key_en', 'site_name_uz', 'site_name_ru', 'site_name_en', 'desc_uz', 'desc_en', 'desc_ru', 'tg', 'facebook', 'instagram'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key_uz' => 'Key Uz',
            'key_ru' => 'Key Ru',
            'key_en' => 'Key En',
            'site_name_uz' => 'Site Name Uz',
            'site_name_ru' => 'Site Name Ru',
            'site_name_en' => 'Site Name En',
            'desc_uz' => 'Desc Uz',
            'desc_en' => 'Desc En',
            'desc_ru' => 'Desc Ru',
            'tg' => 'Tg',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
        ];
    }
}

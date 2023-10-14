<?php

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class OrderForm extends Model
{
    public $arrangement;
    public $type;
    public $region;
    public $sub_region;
    public $tags;
    public $price_max;
    public $price_min;
    public $rooms_count = [];
    public $area_min;
    public $area_max;
    public $city;
    public $id;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['arrangement', 'type', 'region', 'city','id','sub_region'], 'integer'],
            [['area_min', 'area_max'], 'number'],
            [['tags', 'rooms_count', 'price_max', 'price_min'], 'safe'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
//            'verifyCode' => 'Verification Code',
        ];
    }

    public function getTags($lang = null)
    {
        return Tags::getTagsList($lang = null);
    }

    public function getRegionsList($lang = null)
    {

        return Cities::getCitiesList($lang);
    }
    public function getSubRegionsList($lang = null,$region)
    {
//        dd($region);
        return Regions::getRegionFiltered($lang,$region);
    }

    public function getTypesList($lang = null)
    {
        return TypeFlat::getTypesList($lang);
    }

    public function getDealCategoryList($lang = null)
    {
        return DealCategory::getDealCategoryList($lang);
    }

    public function getRoomsList()
    {
//        $max_rooms = Apartments::find()
//            ->select('MAX(count_rooms) as max_room')->asArray()->one();
        $rooms_list = [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => '5+'
        ];
//        for ($i = 1; $i <= $max_rooms['max_room']; $i++) {
//            $rooms_list[$i] = $i;
//        }

        return $rooms_list;
    }

    public function getMinPrice()
    {
        $min = Apartments::find()->select('MIN(price) as price')->where(['status' => 1])->asArray()->one();
        return $min['price'];
    }

    public function getMaxPrice()
    {
        $min = Apartments::find()->select('MAX(price) as price')->where(['status' => 1])->asArray()->one();
        return $min['price'];
    }


}

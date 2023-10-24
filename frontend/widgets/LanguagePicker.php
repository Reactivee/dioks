<?php
/**
 * Created by PhpStorm.
 * User: a_obidov
 * Date: 28.03.2021
 * Time: 14:35
 */

namespace frontend\widgets;

use yii\base\Widget;
use yii\bootstrap\Html;
use Yii;

class LanguagePicker extends Widget
{
    public function run()
    {
        $lang = [
            'uz' => 'Uzbek',
            'ru' => 'Russian',
            'en' => 'English'
        ];
        $currentLang = $lang[Yii::$app->language];
//    dd(Yii::$app->language);
        unset($lang[Yii::$app->language]);
        $params = Yii::$app->request->queryParams;
        $items = [];

        foreach ($lang as $code => $language) {
            $params[0] = '/';
            $params['language'] = $code;
            $items[] = Html::a('<i class=' . $code . '></i>' . $language, $params);
//            dd($items);
        }

        return Html::ul(
            [
                Html::a('<i class=' . Yii::$app->language . '></i>' . $currentLang, 'Rus',
                    ['class' => 'py-3  text-decoration-none  dropdown-toggle',
                        'id' => "dropdownMenuButton", 'data-toggle' => 'dropdown',
                        'aria-expanded' => "false", 'role' => 'button']) .
                Html::ul($items,
                    [
                        'class' => 'dropdown-menu list-unstyled border-0 lang_link language-picker',
                        'aria-labelledby' => "dropdownMenuButton",
                        'encode' => false
                    ])
            ],
            [
                'class' => 'my-lang-picker list-unstyled text-uppercase m-0 p-0 language-picker',
                'encode' => false,
                'itemOptions' => [

                ]
            ]
        );
    }
}

?>

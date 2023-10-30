<?php

use yii\db\Migration;

/**
 * Class m231030_134231_add_Settings
 */
class m231030_134231_add_Settings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            'key_uz' => $this->text(),
            'key_ru' => $this->text(),
            'key_en' => $this->text(),
            'site_name_uz' => $this->text(),
            'site_name_ru' => $this->text(),
            'site_name_en' => $this->text(),
            'desc_uz' => $this->text(),
            'desc_en' => $this->text(),
            'desc_ru' => $this->text(),
            'tg' => $this->text(),
            'facebook' => $this->text(),
            'instagram' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231030_134231_add_Settings cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231030_134231_add_Settings cannot be reverted.\n";

        return false;
    }
    */
}

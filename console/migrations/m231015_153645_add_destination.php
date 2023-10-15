<?php

use yii\db\Migration;

/**
 * Class m231015_153645_add_destination
 */
class m231015_153645_add_destination extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%application}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'phone' => $this->string(),
            'cargo_mass' => $this->string(),
            'dimension' => $this->string(),
            'cargo_to_location' => $this->integer(),
            'cargo_from_location' => $this->integer(),
            'order_code' => $this->string(),
        ]);
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'image' => $this->string(),
        ]);
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'image' => $this->string(),
            'parent_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231015_153645_add_destination cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231015_153645_add_destination cannot be reverted.\n";

        return false;
    }
    */
}

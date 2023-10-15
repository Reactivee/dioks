<?php

use yii\db\Migration;

/**
 * Class m231013_195447_add_order
 */
class m231013_195447_add_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'cargo_type' => $this->string(),
            'cargo_from_location' => $this->string(),
            'cargo_to_location' => $this->string(),
            'status' => $this->integer(),
            'currently_location' => $this->string(),
            'delivery_time' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231013_195447_add_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231013_195447_add_order cannot be reverted.\n";

        return false;
    }
    */
}

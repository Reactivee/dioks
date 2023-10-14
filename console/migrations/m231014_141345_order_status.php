<?php

use yii\db\Migration;

/**
 * Class m231014_141345_order_status
 */
class m231014_141345_order_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_about}}', [
            'id' => $this->primaryKey(),
            'status' => $this->integer(),
            'country' => $this->string(),
            'name_ru' => $this->string(),
            'name_uz' => $this->string(),
            'name_en' => $this->string(),
            'region' => $this->string(),
            'delivery_time' => $this->integer(),
            'order_code' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'long' => $this->string(),
            'lat' => $this->string(),
            'truck_id' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231014_141345_order_status cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231014_141345_order_status cannot be reverted.\n";

        return false;
    }
    */
}
